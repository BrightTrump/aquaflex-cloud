@php $total = 0 @endphp
<x-guest-layout :title="'Cart'">
    @include('components.header')


    <section class="px-30 flex gap-20 justify-between bg-gray-50">

        <div class="basis-[70%] border border-gray-150 bg-white rounded-3xl p-10 flex flex-col gap-8">
            <h1 class="font-semibold text-3xl">Cart ({{ count((array) session('cart')) }})</h1>

            <div x-data='cart'>
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp

                        <div x-data="{ productId: {{ $id }}, csrfToken: '{{ csrf_token() }}', cartUpdatePath: '{{ route('update_cart') }}', cartRemovePath: '{{ route('remove_from_cart', $id) }}' }" class="grid grid-cols-12 items-center gap-10 border-t py-8">
                            <div class="cursor-pointer flex gap-3 items-center text-red-400 font-semibold text-xl col-span-2"
                                x-on:click="cartRemove(cartRemovePath, csrfToken)">
                                <i class="icon fa-solid fa-trash-arrow-up"></i>REMOVE
                            </div>

                            <div class="">
                                <img src="{{ $details['thumbnail'] }}" class="img" alt="">
                            </div>
                            <div class="col-span-4 ">

                                <h3 class="font-semibold text-3xl">{{ $details['name'] }}</h3>
                                <p class="text-2xl font-medium">{{ $details['size'] }}{{ $details['unit'] }} x
                                    {{ $details['quantity'] }} Bottle</p>

                            </div>
                            <div class="flex justify-between items-center gap-5 col-span-2" x-data="{'quantity': {{ $details['quantity'] }}}">

                                <button
                                    class="bg-primary w-10 h-10 p-2 rounded-md flex justify-center items-center cart_update"
                                    x-on:click="quantity > 1 ? (quantity--, cartUpdate(quantity, productId, cartUpdatePath, csrfToken) ): 1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                        height="100" viewBox="0,0,256,256">
                                        <g transform="">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(10.66667,10.66667)">
                                                    <path d="M3,11v2h18v-2z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>

                                <span x-text="quantity" class="font-semibold flex items-center text-3xl"></span>

                                <button
                                    x-on:click="quantity++; cartUpdate(quantity, productId, cartUpdatePath, csrfToken)"
                                    class="bg-primary w-10 h-10 p-2 rounded-md flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                        height="40" viewBox="0,0,256,256">
                                        <g transform="">
                                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
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
                                ₦{{ $details['price'] * $details['quantity'] }}</div>

                        </div>
                    @endforeach
                @endif
                @if (!session('cart'))
                    <div class="text-3xl border-t py-8">
                        Cart is Empty!
                    </div>
                @endif
            </div>

        </div>

        <div class="basis-[30%] bg-white border border-gray-150 h-fit rounded-3xl px-10 py-16 flex flex-col gap-14">
            <div class="flex flex-col gap-5">
                <h1 class="font-semibold text-4xl">Order Summary</h1>
                <div class="bg-gray-50 h-auto rounded-xl p-8">
                    <div class="flex flex-col gap-5">
                        <div class="grid grid-cols-2 text-2xl"><span>Subtotal</span>
                            <span class="font-semibold flex justify-end">NGN {{ $total }}</span>
                        </div>
                        <div class="grid grid-cols-2 text-2xl"><span>Delivery</span>
                            <span class="font-semibold flex just ify-end">-</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 text-2xl gap-6">
                <span>Order Total</span>
                <span class="col-span-2 font-semibold text-3xl flex justify-end text-secondary">NGN
                    {{ $total }}</span>
            </div>
            <button class="bg-primary py-6 rounded-xl text-2xl font-semibold text-white">Proceed to Checkout</button>
        </div>
    </section>
    <!-- ==================== Cart Area (End) ==================== -->
    @include('components.footer')
    @include('components.cart-delete-alert')

</x-guest-layout>
