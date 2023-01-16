<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class GetShareHolderController extends Controller
{
    public function getShareHolder(){

        $wallet = Wallet::findOrFail(auth()->id());
        $data = $wallet->hold_shares;

        return view('trade')->with('data', $data);

    }
}
