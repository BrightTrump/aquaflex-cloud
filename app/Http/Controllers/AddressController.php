<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

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
        return view('customer.address.edit');
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
}
