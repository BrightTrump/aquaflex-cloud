<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreAddressRequest;

class AddressController extends Controller
{

    /**
     * Show to add address.
     * @return \Illuminate\View\View
     */
    public function addAddress(): View
    {
        return view('customer.address.add');
    }

    /**
     * Show edit form for address
     * @return \Illuminate\View\View
     */
    public function edit(): View
    {
        return view('customer.address.edit', $this->customerCredentials());
    }

    /**
     * List of all address
     * @return \Illuminate\View\View
     */
    public function addressBook(): View
    {
        return view('customer.address.index');
    }

    /**
     * Store User Address
     * @param \App\Http\Requests\StoreAddressRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAddressRequest $request): RedirectResponse
    {
        return redirect('/customer/address');
    }

    private function customerCredentials()
    {
        $user = User::where('id', auth()->user()->id)
            ->with('userAddress')
            ->first();

        if ($user->userAddress()->first()) {
            $address = Address::findOrFail($user->userAddress()->first()->address_id);
        }
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
}
