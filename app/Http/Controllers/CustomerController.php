<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\View\View;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function account(): View
    {
        return view("customer.account", $this->customerCredentials() );
    }


    public function orders(): View
    {
        return view("customer.order.index");
    }

    private function customerCredentials(){
        $user    = User::where('id', auth()->user()->id)
            ->with('userAddress')
            ->first();

        $userAddress = UserAddress::where('user_id', auth()->user()->id)
            ->where('is_default', true)->first();

        $address = Address::findOrFail($userAddress->address_id);

        return [
            'user' => $user,
            'address' => $address ?? null
        ];

    }
}
