<?php

namespace App\Http\Controllers;

use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Facades\Paystack;

class CheckoutController extends Controller
{
    public function checkout(Request $request){

        $data = [
            'amount' => $request->input("amount") * 100 ,
            "reference" => Paystack::genTranxRef(),
            "email" => Auth::user()->email,
            "currency" => "NGN",
            "orderID" => 23456,
        ];

        return Paystack::getAuthorizationUrl($data)->redirectNow();
        //return view("shop.checkout");
    }
}
