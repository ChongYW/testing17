<?php

namespace App\Http\Controllers;

use App\Models\Bit;
use App\Models\TransactionHistory;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class TradeController extends Controller
{

    public function trading(Request $request){

        $request->validate([

            'transaction_type' => 'required',
            'amount' => 'required',

        ]);

        $wallet = Wallet::findOrFail(auth()->id());
        $currentHold_shares = $wallet -> hold_shares;

            if ($request->transaction_type == "add"){

                $newHold_shares = $currentHold_shares + $request['amount'];

            }else{

                $newHold_shares = $currentHold_shares - $request['amount'];

                if ($newHold_shares < 0){
                    return view('wrong');
                }

            }

            $updateTrading = new TransactionHistory();
            // need to pay attention to "wallet_id" if later want to add function like add other type than "BTC".
            $updateTrading -> wallet_id = auth()->id();
            $updateTrading -> user_id = auth()->id();
            $updateTrading -> time = now();
            // need to pay attention to "type" if later want to add function like add other type than "BTC".
            $updateTrading -> type = 'BTC';
            $updateTrading -> transaction_type = $request->transaction_type;
            $updateTrading -> amount = $request['amount'];
            $updateTrading -> save();

            // Fetch the latest rate (S)****************************************************************************************
            $api_url = 'https://api.coindesk.com/v1/bpi/currentprice.json';

            $response = Http::get($api_url);

            $data = json_decode($response -> body());

            $bit = new Bit();

            $rate = $data->bpi->USD->rate;
            $updateTimeUTC = $data->time->updated;

            $bit -> chartName = $data->chartName;
            $bit -> currenciesName = $data->bpi->USD->code;
            // Cause the float num is a string, so we need to grab the num only:
            $bit -> rate = (float)filter_var($rate, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            // The date has the string, we only want the int so we:
            $bit -> updateTimeUTC = date('Y-m-d H:i:s', strtotime($updateTimeUTC));
            $bit -> save();
            // Fetch the latest rate (E)****************************************************************************************

            $wallet -> hold_shares = $newHold_shares;
            $wallet -> amount = $newHold_shares * $bit -> rate;
            $wallet -> save();

            $updatedBit = $wallet -> hold_shares * (float)filter_var($rate, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $newestData = [
                'updatedBit' => $updatedBit,
                'currentHold_shares' => $newHold_shares
            ];

            return view('dashboard-dark')->with($newestData);

    }

}
