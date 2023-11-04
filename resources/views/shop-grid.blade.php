<x-guest-layout>
    @include('components.header')

    <!-- ==================== Page-Title (Start) ==================== -->
    {{-- <div class="page-title">
        <div class="container">
            <div class="title">
                <h2>Shop Grid</h2>
            </div>

            <div class="link">
                <a href="/">Home</a>
                <i class="fa-solid fa-angles-right"></i>
                <span class="page">Shop Grid</span>
            </div>
        </div>
    </div> --}}
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Shop-Grid Area (Start) ==================== -->
    <section class="shop">
        <!-- ========== Shop Sidebar Area (Start) ========== -->
        {{-- <div class="sidebar">
            <div class="category sidebar-item">
                <div class="sidebar-heading">
                    <h2>Categories</h2>
                </div>

                <div class="box-container">
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Uncategories</span>
                        <p>(30)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Bottled Water</span>
                        <p>(75)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Blackcurrant 35cl</span>
                        <p>(78)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Blackcurrant 50cl</span>
                        <p>(82)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Blackcurrant 1 Litres</span>
                        <p>(64)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Blackcurrant 3 Litres</span>
                        <p>(72)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Blackcurrant 25 Litres</span>
                        <p>(16)</p>
                    </a>
                    <a href="#" class="item">
                        <span><i class="fas fa-caret-right"></i>Accessories</span>
                        <p>(03)</p>
                    </a>
                </div>
            </div>

            <div class="filter sidebar-item">
                <div class="sidebar-heading">
                    <h2>Filter</h2>
                </div>

                <div class="box-container">
                    <div class="slider">
                        <div class="progress"></div>
                    </div>

                    <div class="range-input">
                        <input type="range" class="range-min" min="0" max="1000" value="250"
                            step="10" />
                        <input type="range" class="range-max" min="0" max="1000" value="750"
                            step="10" />
                    </div>

                    <div class="price-wrap">
                        <div class="price-input">
                            <div class="field">
                                <span>$</span>
                                <input type="number" class="input-min" value="250" />
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <span>$</span>
                                <input type="number" class="input-max" value="750" />
                            </div>
                        </div>
                        <span class="btn">FILTER</span>
                    </div>
                </div>
            </div>

            <!-- Popular-Products Area (Start) -->
            <div class="posts sidebar-item">
                <div class="sidebar-heading">
                    <h2>Popular Products</h2>
                </div>

                <div class="box-container">
                    <div class="post-item">
                        <img src="/assets/images/Process-3.png" alt="" />
                        <div class="content">
                            <a href="#">Bottled Water</a>
                            <div class="price">
                                <p>$40.00 <span>$50.00</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="/assets/images/blackcurrant (9).jpg" alt="" />
                        <div class="content">
                            <a href="">Blackcurrant (35cl)</a>
                            <div class="price">
                                <p>$40.00 <span>$50.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <img src="/assets/images/blackcurrant (1).jpg" alt="" />
                        <div class="content">
                            <a href="">Blackcurrant (50cl)</a>
                            <div class="price">
                                <p>$40.00 <span>$50.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <img src="/assets/images/blackcurrant (4).jpg" alt="" />
                        <div class="content">
                            <a href="">Blackcurrant (1 Litres)</a>
                            <div class="price">
                                <p>$40.00 <span>$50.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <img src="/assets/images/blackcurrant (2).jpg" alt="" />
                        <div class="content">
                            <a href="">Blackcurrant (3 Litres)</a>
                            <div class="price">
                                <p>$40.00 <span>$50.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <img src="/assets/images/blackcurrant (6).jpg" alt="" />
                        <div class="content">
                            <a href="">Blackcurrant (25 Litres)</a>
                            <div class="price">
                                <p>$40.00 <span>$50.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular-Products Area (End) -->
        </div> --}}
        <!-- ========== Shop Sidebar Area (End) ========== -->

        <!-- ========== Shop Container (Start) ========== -->
        <div class="shop-container">
            <div class="intro">
                <div class="showing">Showing 6 of 35 Products</div>
                <div class="styles">
                    <a href="Shop-Grid.html" class="fas fa-th"></a>
                    <a href="Shop-List.html" class="fas fa-list"></a>
                </div>
                <div class="sorting-type">
                    <select name="sort" id="sort">
                        <option value="default">Default Sorting</option>
                        <option value="name, A to Z">Sort by Popularity</option>
                        <option value="mname, Z to A">Sort by Latest</option>
                        <option value="price, low to high">Sort by Average Price</option>
                        <option value="price, low to high">
                            Sort by Price: Low to High
                        </option>
                        <option value="price, high to low">
                            Sort by Price: High to Low
                        </option>
                    </select>
                </div>
            </div>

            <div class="product-container grid">
                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/Process-3.png" alt="" />
                    </div>
                    <div class="content">
                        <a href="/product-single">
                            <h3>Bottled Water</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Thoughtfully packaged, securely sealed, easily accessible, and
                            readily accessible.
                        </p>
                        <a href="/product-single" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (9).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="Product-Single">
                            <h3>Blackcurrant (30cl)</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our small, vibrant blackcurrants, bursting with vitamin C and
                            antioxidants, are a vital ingredient in jams, jellies, and
                            beverages, contributing to our top priority of enhancing
                            customer well-being.
                        </p>
                        <a href="/product-single" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (1).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="Product-Single">
                            <h3>Blackcurrant (50cl)</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            We're proud of our intensely dark purple blackcurrants, known
                            for their vibrant, tangy taste, rich in vitamin C and
                            antioxidants. These powerhouses are essential for making jams,
                            jellies, and beverages, all aimed at improving our customers'
                            well-being.
                        </p>
                        <a href="/product-single" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (4).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="product-single-2">
                            <h3>Blackcurrant (1 Litres)</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our petite, deep purple blackcurrants are known for their zesty,
                            tangy flavor, rich in vitamin C and antioxidants. They're a key
                            ingredient in jams, jellies, and beverages. Boosting customer
                            health is our top goal.
                        </p>
                        <a href="/product-single" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (2).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="Product-Single">
                            <h3>Blackcurrant (3 Litres)</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our vibrant, petite blackcurrants, packed with vitamin C and
                            antioxidants, are essential in crafting jams, jellies, and
                            beverages. This aligns seamlessly with our core mission of
                            promoting customer well-being and health.
                        </p>
                        <a href="/product-single" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/blackcurrant (6).jpg" alt="" />
                    </div>
                    <div class="content">
                        <a href="Product-Single">
                            <h3>Blackcurrant (25 Litres)</h3>
                        </a>
                        <div class="price">$40.00 <span>$50.00</span></div>
                        <p>
                            Our petite, lively blackcurrants, brimming with vitamin C and
                            antioxidants, play a crucial role in the creation of jams,
                            jellies, and beverages, aligning perfectly with our primary
                            focus on elevating customer health and wellness.
                        </p>

                        <a href="/product-single" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="pages-no">
                <div class="container">
                    <div class="item">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="numbers">
                        <div class="item active">1</div>
                        <div class="item">2</div>
                        <div class="item">3</div>
                    </div>
                    <div class="item">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Shop Container (End) ========== -->
    </section>
    <!-- ==================== Shop-Grid Area (End) ==================== -->

    @include('components.footer')
</x-guest-layout>
