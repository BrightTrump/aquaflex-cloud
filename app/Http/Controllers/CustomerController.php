<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
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

        if($user->userAddress()->first()){
            $address = Address::findOrFail($user->userAddress()->first()->address_id);
        }

        if(request()->routeIs('address.edit')){
            return [
                'user' => $user,
                'address' => $address ?? [
                    'address_line1' => null,
                    'address_line2' => null,
                    'city' => null,
                    'state' => null,
                    'lga' => null,
                    'country' => null,
                ]
            ];
        }

        return [
            'user' => $user,
            // 'address' => $address ?? [
            //     'address_line1' => null,
            //     'address_line2' => null,
            //     'city' => null,
            //     'state' => null,
            //     'lga' => null,
            //     'country' => null,
            // ]
            'address' => $address ?? null
        ];

    }
}
