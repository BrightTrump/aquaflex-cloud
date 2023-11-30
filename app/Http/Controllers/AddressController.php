<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\UserAddress;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

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
    public function edit($id): View
    {
        $address = Address::findOrFail($id);

        return view('customer.address.edit', [
            'user' => auth()->user(),
            'address' => $address,
        ]);
    }

    /**
     * List of all address
     * @return \Illuminate\View\View
     */
    public function addressBook(): View|Response
    {
        $userAddress = UserAddress::where('user_id', auth()->user()->id)->with('address', 'user')->latest()->get();

        //return response($userAddress);
        return view('customer.address.index', ['userAddresses' => $userAddress ?? []]);
    }

    /**
     * Store User Address
     * @param \App\Http\Requests\StoreAddressRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request): RedirectResponse|Response
    {
        $address = Address::create($request->validated());

        $userAddress = new UserAddress([
            'is_default' => $request->is_default
        ]);
        $userAddress->user()->associate($request->user());
        $userAddress->address()->associate($address);
        $userAddress->save();

        // Disable Previous Default Address
        $userAddresses = UserAddress::where('user_id', auth()->user()->id)->get();

        foreach ($userAddresses as $uAddress) {
            if ($uAddress->id !== $userAddress->id) {
                $uAddress->is_default = false;
                $uAddress->save();
            }
        }

        return back()->with('status', 'added-adrress');
    }

    public function update(UpdateAddressRequest $request, $id): RedirectResponse|Response
    {
        $address = Address::findOrFail($id);
        $address->fill($request->validated());
        $address->save();

        return back()->with('status', 'address-updated');
    }

}
