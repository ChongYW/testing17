<?php

namespace App\Http\Controllers;

use App\Models\Bit;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RefreshBitController extends Controller
{
    public function refreshBit(){

        $api_url = 'https://api.coindesk.com/v1/bpi/currentprice.json';

        $response = Http::get($api_url);

        $data = json_decode($response -> body());

        $bit = new Bit();

        $rate = $data->bpi->GBP->rate;
        $updateTimeUTC = $data->time->updated;

        $bit -> chartName = $data->chartName;
        $bit -> currenciesName = $data->bpi->GBP->code;
        // Cause the float num is a string, so we need to grab the num only:
        $bit -> rate = (float)filter_var($rate, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        // The date has the string, we only want the int so we:
        $bit -> updateTimeUTC = date('Y-m-d H:i:s', strtotime($updateTimeUTC));
        $bit -> save();

        $updatedBit = 0.11857418 * (float)filter_var($rate, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $updateWallet = Wallet::findOrFail(auth()->id());
//        $updateWallet->user_id = auth()->id();
        $updateWallet->type = 'BTC';
        $updateWallet->amount = $updatedBit;
        $updateWallet->save();

        return view('dashboard-dark', ['updatedBit' => $updatedBit]);

    }
}
