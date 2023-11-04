<x-guest-layout>
    @include('components.header')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title">
        <div class="container">
            <div class="title">
                <h2>Product Single</h2>
            </div>

            <div class="link">
                <a href="/index.html">Home</a>
                <i class="fa-solid fa-angles-right"></i>
                <span class="page">Product Single</span>
            </div>
        </div>
    </div>
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Product Single Area (Start) ==================== -->
    <section class="product-single">
        <!-- ========== Product-Description Area (Start) ========== -->
        <div class="product-des des">
            <div class="box-container">
                <div class="image">
                    <div class="image-container">
                        <div class="main">
                            <img src="/assets/images/Process-3.png" alt="" />
                        </div>
                        <div class="change-btns">
                            <img class="active" src="/assets/images/Process-3.png" alt="" />
                            <img src="/assets/images/Process-3.png" alt="" />
                            <img src="/assets/images/Process-3.png" alt="" />
                            <img src="/assets/images/Process-3.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="text">
                        <div class="product-intro">
                            <div class="introduction">
                                <h3>Bottled Water</h3>
                                <div class="intro">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span>(100+) Reviews</span>
                                </div>
                            </div>

                            <div class="price">$40.00/- <span>$50.00</span></div>

                            <div class="box">
                                <div class="qty">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus" />
                                        <input type="number" step="1" min="1" max="150"
                                            name="quantity" id="quantity" value="1" title="Qty"
                                            class="input-text qty text" />
                                        <input type="button" value="+" class="plus" />
                                    </div>
                                </div>

                                <button class="btn" id="addToCartButton">Add to Cart</button>

                            </div>
                        </div>

                        <div class="availablity">
                            <h4>Availablity:</h4>
                            <span class="in-stock">In Stock</span>
                        </div>

                        <p>
                            Thoughtfully packaged, securely sealed, easily accessible, and
                            readily accessible.
                        </p>

                        <div class="categories">
                            <h4>Categories:</h4>
                            <span>Blackcurrant</span>
                        </div>

                        <div class="tags">
                            <h4>Tags:</h4>
                            <span>Water</span>
                            <span>Drink</span>
                            <span>Health</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-info">
                <div class="product-info-tabs">
                    <button type="button" class="info-btn active" data-target="#description">
                        Description
                    </button>
                    <button type="button" class="info-btn" data-target="#additional">
                        Additional Information
                    </button>
                    <button type="button" class="info-btn" data-target="#reviews">
                        Reviews (2)
                    </button>
                </div>

                <div class="product-info-gallery active" id="description">
                    <div class="description">
                        <p>
                            Thoughtfully packaged, securely sealed, easily accessible, and
                            readily accessible.
                        </p>
                    </div>
                </div>

                <div class="product-info-gallery" id="additional">
                    <div class="additional-info">
                        <div class="item">
                            <h3><i class="fa-solid fa-square"></i>Color:</h3>
                            <span>Black</span>
                        </div>
                        <div class="item">
                            <h3><i class="fa-solid fa-square"></i>Capacity:</h3>
                            <span>35cl</span>
                        </div>
                        <div class="item">
                            <h3><i class="fa-solid fa-square"></i>Installation Type:</h3>
                            <span>Counter Top</span>
                        </div>
                        <div class="item">
                            <h3><i class="fa-solid fa-square"></i>Filtration Process:</h3>
                            <span>Multi Stage</span>
                        </div>
                    </div>
                </div>

                <div class="product-info-gallery" id="reviews">
                    <div class="reviews">
                        <h2>2 Reviews</h2>

                        <div class="comment">
                            <div class="image">
                                <img src="/assets/images/reviews (1).png" alt="" />
                            </div>
                            <div class="content">
                                <div class="intro">
                                    <h3>Richard Wilson</h3>
                                    <h6>feb 25th, 2023</h6>
                                </div>
                                <p class="text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Molestias sapiente ullam esse laudantium corporis pariatur.
                                </p>
                            </div>
                        </div>

                        <div class="comment">
                            <div class="image">
                                <img src="/assets/images/reviews (2).png" alt="" />
                            </div>
                            <div class="content">
                                <div class="intro">
                                    <h3>Sarah Smith</h3>
                                    <h6>mar 6th, 2023</h6>
                                </div>
                                <p class="text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Molestias sapiente ullam esse laudantium corporis pariatur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="leave-reply">
                        <form class="form"
                            action="https://aquadrop-html.asdesignsgalaxy.com/pages/Shop/comment.php">
                            <h2>Leave a Comment</h2>

                            <div class="input-box">
                                <input type="text" name="name" class="box" id="name"
                                    placeholder="name" required />
                                <input type="email" name="email" class="box" id="email"
                                    placeholder="email" required />
                            </div>

                            <textarea cols="30" rows="10" name="comment" class="box" id="comment" placeholder="comment"></textarea>

                            <input type="submit" value="submit" class="btn" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Product-Description Area (End) ========== -->

        <!-- ========== Related Products Area (Start) ========== -->
        <div class="related-items">
            <div class="sidebar-heading">
                <h2>You may also like</h2>
            </div>

            <div class="box-container">
                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (9).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="/product-single">
                            <h3>Blackcurrant 35cl</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our petite, deep purple blackcurrants boast zesty tanginess,
                            abundant vitamin C, antioxidants, and play a crucial role in
                            enhancing customer health.
                        </p>
                        <button class="btn" id="addToCartButton">Add to Cart</button>
                    </div>
                </div>

                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (6).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="/product-single">
                            <h3>Blackcurrant 25Litres</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our petite, deep purple blackcurrants boast zesty tanginess,
                            abundant vitamin C, antioxidants, and play a crucial role in
                            enhancing customer health.
                        </p>
                        <button class="btn" id="addToCartButton">Add to Cart</button>
                    </div>
                </div>

                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (2).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="/product-single">
                            <h3>Blackcurrant 3Litres</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our petite, deep purple blackcurrants boast zesty tanginess,
                            abundant vitamin C, antioxidants, and play a crucial role in
                            enhancing customer health.
                        </p>
                        <button class="btn" id="addToCartButton">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Related Products Area (End) ========== -->
    </section>
    <!-- ==================== Product Single Area (End) ==================== -->

    @include('components.footer')
</x-guest-layout>
