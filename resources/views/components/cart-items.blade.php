<div class="basis-[70%] border border-gray-150 bg-white rounded-3xl p-10 flex flex-col gap-8">
    <h1 class="font-semibold text-3xl">Cart
        @if(Auth::check())
            ({{ $totalQty }})
        @endif
    </h1>

    <div x-data='cart'>
        @if (count($cartItems) != 0)
            @foreach ($cartItems as $cartItem)
                @php

                    $total += $cartItem->productItem->price * $cartItem->qty;
                @endphp

                <div x-data="{ cartItemId: {{ $cartItem->id }}, csrfToken: '{{ csrf_token() }}', cartUpdatePath: '{{ route('update_cart') }}', cartRemovePath: '{{ route('remove_from_cart', $cartItem->id) }}' }" class="grid grid-cols-12 items-center gap-10 border-t py-8">
                    <div class="cursor-pointer flex gap-3 items-center text-red-400 font-semibold text-xl col-span-2"
                        x-on:click="cartRemove(cartRemovePath, csrfToken)">
                        <i class="icon fa-solid fa-trash-arrow-up"></i>REMOVE
                    </div>

                    <div class="">
                        <img src="{{ $cartItem->productItem->product_image }}" class="img" alt="">
                    </div>
                    <div class="col-span-4 ">

                        <h3 class="font-semibold text-3xl">{{ $cartItem->productItem->name }}</h3>
                        <p class="text-2xl font-medium">{{ $cartItem->productItem->size }}{{ $cartItem->productItem->unit }} x
                            {{ $cartItem->quantity }} Bottle</p>

                    </div>
                    <div class="flex justify-between items-center gap-5 col-span-2" x-data="{ 'quantity': {{ $cartItem->qty }} }">

                        <button class="bg-primary w-10 h-10 p-2 rounded-md flex justify-center items-center cart_update"
                            x-on:click="quantity > 1 ? (quantity--, cartUpdate(quantity, cartItemId, cartUpdatePath, csrfToken) ): 1;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                viewBox="0,0,256,256">
                                <g transform="">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(10.66667,10.66667)">
                                            <path d="M3,11v2h18v-2z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>

                        <span x-text="quantity" class="font-semibold flex items-center text-3xl"></span>

                        <button x-on:click="quantity++; cartUpdate(quantity, cartItemId, cartUpdatePath, csrfToken)"
                            class="bg-primary w-10 h-10 p-2 rounded-md flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256">
                                <g transform="">
                                    <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(10.66667,10.66667)">
                                            <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>


                    <div class="font-semibold text-3xl col-span-3 flex justify-end
                        ">
                        ₦{{ $cartItem->productItem->price * $cartItem->qty }}</div>

                </div>
            @endforeach
        @endif
    </div>
</div>

@include('components.checkout')
