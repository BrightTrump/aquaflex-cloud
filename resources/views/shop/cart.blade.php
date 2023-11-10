@php 
$total = 0 

@endphp
<x-guest-layout :title="'Cart'">
    @include('components.header')

    <!-- ==================== Cart Area (Start) ==================== -->
    {{-- <section class="cart">
        <!-- ========== Shopping-Cart Area (Start) ========== -->
        <form action="https://aquadrop-html.asdesignsgalaxy.com/cart.blade.php" method="post" id="cart-table">
            <div class="shopping-cart">
                <div class="container">
                    <div class="shoplist-title">
                        <h3 class="product-heading">Product</h3>
                        <h3>Price</h3>
                        <h3>Quantity</h3>
                        <h3>Total</h3>
                        <h3>Action</h3>
                    </div>

                    <div class="box-container">
                        <div class="cart-item">
                            <div class="box product">
                                <img src="/assets/images/Shop/Cart/1.png" alt="" />
                                <div class="name">Water Purifier</div>
                            </div>
                            <div class="box price">$400.00</div>
                            <div class="box quantitly">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus" />
                                    <input type="number" step="1" min="1" max="100" name="quantity"
                                        value="1" title="Qty" class="input-text qty text" />
                                    <input type="button" value="+" class="plus" />
                                </div>
                            </div>
                            <div class="box total">$400.00</div>
                            <div class="box action">
                                <i class="icon fa-solid fa-trash-arrow-up"></i>
                            </div>
                        </div>

                        <div class="cart-item">
                            <div class="box product">
                                <img src="/assets/images/Shop/Cart/2.png" alt="" />
                                <div class="name">Bottled Water</div>
                            </div>
                            <div class="box price">$20.00</div>
                            <div class="box quantitly">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus" />
                                    <input type="number" step="1" min="1" max="100" name="quantity"
                                        value="5" title="Qty" class="input-text qty text" />
                                    <input type="button" value="+" class="plus" />
                                </div>
                            </div>
                            <div class="box total">$100.00</div>
                            <div class="box action">
                                <i class="icon fa-solid fa-trash-arrow-up"></i>
                            </div>
                        </div>

                        <div class="cart-item">
                            <div class="box product">
                                <img src="/assets/images/Shop/Cart/3.png" alt="" />
                                <div class="name">Water Distiller</div>
                            </div>
                            <div class="box price">$400.00</div>
                            <div class="box quantitly">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus" />
                                    <input type="number" step="1" min="1" max="100" name="quantity"
                                        value="1" title="Qty" class="input-text qty text" />
                                    <input type="button" value="+" class="plus" />
                                </div>
                            </div>
                            <div class="box total">$400.00</div>
                            <div class="box action">
                                <i class="icon fa-solid fa-trash-arrow-up"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-bottom">
                <div class="coupon-container">
                    <input type="text" name="coupon-code" class="box" id="coupon-code" placeholder="coupon code"
                        required />
                    <button type="submit" class="btn" name="apply-coupon" id="apply-coupon" value="apply-coupon">
                        Apply coupon
                    </button>
                </div>

                <button type="submit" class="btn" name="update-cart" id="update-cart" value="update-cart">
                    Update cart
                </button>
            </div>
        </form>
        <!-- ========== Shopping-Cart Area (End) ========== -->

        <!-- ========== Cart-Summary Area (Start) ========== -->
        <div class="cart-summary">
            <div class="summary-list">
                <div class="summary-item">
                    <div class="name summary-box">Sub Total</div>
                    <div class="value summary-box">$900.00</div>
                </div>

                <div class="summary-item">
                    <div class="name summary-box">Delivery Fee</div>
                    <div class="value summary-box">$20.00</div>
                </div>

                <div class="summary-item">
                    <div class="name summary-box">Discount</div>
                    <div class="value summary-box">$10.00</div>
                </div>

                <div class="summary-item">
                    <div class="name summary-box">Tax</div>
                    <div class="value summary-box">$10.00</div>
                </div>

                <div class="summary-item">
                    <div class="name summary-box">Total</div>
                    <div class="value summary-box">$920.00</div>
                </div>
            </div>

            <a href="/checkout" class="btn">Proceed to Checkout</a>
        </div>
        <!-- ========== Cart-Summary Area (End) ========== -->
    </section> --}}
    <section class="min-h-screen px-30 flex gap-20 justify-between bg-gray-50">
        <div class="basis-[70%] border border-gray-150 bg-white rounded-3xl p-10 flex flex-col gap-8">
            <h1 class="font-semibold text-3xl">Cart ({{ count((array) session('cart')) }})</h1>

            <div>
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <article class="grid grid-cols-12 items-center gap-10 border-t py-8">
                            <div class="flex gap-3 items-center text-red-400 font-semibold text-xl col-span-2">
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
                            <div class="flex justify-between items-center gap-5">

                                <button type="button"
                                    class="bg-primary w-10 h-10 p-2 rounded-md flex justify-center items-center cart_update">
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

                                <span
                                    class="text-3xl block font-semibold cart_quantity">{{ $details['quantity'] }}</span>

                                <button type="button"
                                    class="bg-primary w-10 h-10 p-2 rounded-md flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                        height="100" viewBox="0,0,256,256">
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


                            <div class="font-semibold text-3xl col-span-4 flex justify-end
                        ">
                                ₦{{ $details['price'] * $details['quantity'] }}</div>

                        </article>
                    @endforeach
                @endif
                @if (!session('cart'))
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

    @section('')
</x-guest-layout>
