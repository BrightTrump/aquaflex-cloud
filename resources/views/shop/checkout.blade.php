<x-guest-layout>
    @include('components.header')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title">
        <div class="container">
            <div class="title">
                <h2>Checkout</h2>
            </div>

            <div class="link">
                <a href="/">Home</a>
                <i class="fa-solid fa-angles-right"></i>
                <span class="page">Checkout</span>
            </div>
        </div>
    </div>
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Checkout Area (Start) ==================== -->
    <section>
        <form action="#" class="checkout form">
            <div class="box-1">
                <!-- ========== Billing-Address Area (Start) ========== -->
                <div class="billing address checkout-item">
                    <div class="heading">
                        <h2>billing address</h2>
                        <img src="/assets/images/Heading/Heading.png" alt="" />
                    </div>

                    <div class="box-container">
                        <div class="input-box">
                            <input type="text" name="first-name" placeholder="first name" id="b-first-name"
                                class="box" />
                            <input type="text" name="last-name" placeholder="last name" id="b-last-name"
                                class="box" />
                        </div>
                        <input type="text" name="company" placeholder="company" id="b-company" class="box" />
                        <input type="text" name="country" placeholder="country" id="b-country" class="box" />
                        <input type="text" name="address" placeholder="address" id="b-address" class="box" />
                        <div class="input-box">
                            <input type="text" name="city" placeholder="town/city" id="b-city"
                                class="box" />
                            <input type="text" name="zip" placeholder="postcode/ZIP" id="b-zip"
                                class="box" />
                        </div>
                        <div class="input-box">
                            <input type="number" name="number" placeholder="phone no" id="b-number" class="box" />
                            <input type="email" name="email" placeholder="email address" id="b-email"
                                class="box" />
                        </div>
                    </div>
                </div>
                <!-- ========== Billing-Address Area (End) ========== -->

                <!-- ========== Shipping-Address Area (Start) ========== -->
                <div class="shipping address checkout-item">
                    <div class="heading">
                        <h2>shipping address</h2>
                        <img src="/assets/images/Heading/Heading.png" alt="" />
                    </div>

                    <div class="box-container">
                        <div class="input-box">
                            <input type="text" name="first-name" placeholder="first name" id="s-first-name"
                                class="box" />
                            <input type="text" name="last-name" placeholder="last name" id="s-last-name"
                                class="box" />
                        </div>
                        <input type="text" name="company" placeholder="company" id="s-company" class="box" />
                        <input type="text" name="country" placeholder="country" id="s-country" class="box" />
                        <input type="text" name="address" placeholder="address" id="s-address" class="box" />
                        <div class="input-box">
                            <input type="text" name="city" placeholder="town/city" id="s-city"
                                class="box" />
                            <input type="text" name="zip" placeholder="postcode/ZIP" id="s-zip"
                                class="box" />
                        </div>
                        <div class="input-box">
                            <input type="number" name="number" placeholder="phone no" id="s-number"
                                class="box" />
                            <input type="email" name="email" placeholder="email address" id="s-email"
                                class="box" />
                        </div>
                    </div>
                </div>
                <!-- ========== Shipping-Address Area (End) ========== -->
            </div>

            <div class="box-2">
                <!-- ========== Payment-Method Area (Start) ========== -->
                <div class="payment-methods checkout-item">
                    <div class="heading">
                        <h2>payment method</h2>
                        <img src="/assets/images/Heading/Heading.png" alt="" />
                    </div>

                    <div class="content">
                        <div class="payment">
                            <input type="radio" id="direct-bank-transfer" name="payment" value="DIRECT" />
                            <label for="direct-bank-transfer">direct bank transfer</label>
                            <div class="payment-body active">
                                <p>
                                    Make your payment directly into our bank account. Please use
                                    your Order ID as the payment reference. Your order won’t be
                                    shipped until the funds have our account..
                                </p>
                            </div>
                        </div>

                        <div class="payment">
                            <input type="radio" id="cash-on-delivery" name="payment" value="CASH" />
                            <label for="cash-on-delivery">cash on delivery</label>
                            <div class="payment-body">
                                <p>
                                    Please send your cheque to Store Name, Store Street, Store
                                    Town, Store State / County, Store Postcode.
                                </p>
                            </div>
                        </div>

                        <div class="payment">
                            <input type="radio" id="paypal" name="payment" value="PAYPAL" />
                            <label for="paypal">paypal</label>
                            <div class="payment-body">
                                <p>
                                    Pay via PayPal; you can pay with your credit card if you
                                    don’t have a PayPal account.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Payment-Method Area (End) ========== -->

                <!-- ========== Cart-Total Area (Start) ========== -->
                <div class="shop-summary checkout-item">
                    <div class="heading">
                        <h2>cart total</h2>
                        <img src="/assets/images/Heading/Heading.png" alt="" />
                    </div>

                    <div class="summary-list">
                        <div class="summary-item">
                            <div class="name summary-box">Sub total</div>
                            <div class="value summary-box">$900.00</div>
                        </div>

                        <div class="summary-item">
                            <div class="name summary-box">delivery fee</div>
                            <div class="value summary-box">$20.00</div>
                        </div>

                        <div class="summary-item">
                            <div class="name summary-box">discount</div>
                            <div class="value summary-box">$10.00</div>
                        </div>

                        <div class="summary-item">
                            <div class="name summary-box">tax</div>
                            <div class="value summary-box">$10.00</div>
                        </div>

                        <div class="summary-item">
                            <div class="name summary-box">total</div>
                            <div class="value summary-box">$920.00</div>
                        </div>
                    </div>
                </div>
                <!-- ========== Cart-Total Area (End) ========== -->

                <div class="btn-container">
                    <button type="submit" class="btn">Place Order</button>
                </div>
            </div>
        </form>
    </section>
    <!-- ==================== Checkout Area (End) ==================== -->

    @include('components.footer')

</x-guest-layout>
