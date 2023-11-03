<x-guest-layout>
    @include('components.header')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title">
        <div class="container">
            <div class="title">
                <h2>Cart</h2>
            </div>

            <div class="link">
                <a href="/">Home</a>
                <i class="fa-solid fa-angles-right"></i>
                <span class="page">Cart</span>
            </div>
        </div>
    </div>
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Cart Area (Start) ==================== -->
    <section class="cart">
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
    </section>
    <!-- ==================== Cart Area (End) ==================== -->
    @include('components.footer')
</x-guest-layout>
