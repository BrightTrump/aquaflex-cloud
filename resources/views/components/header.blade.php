<!-- ==================== Header Area (Start) ==================== -->
<header>
    <!-- ===== Header Area (Start) ===== -->

    <div class="justify-between flex items-center py-3 px-16 h-[59px]">
        <a href="/" class="" aria-label="go to homepage" aria-current="page">
            <div class="dng-logotype">
                <img src="/assets/images/Logo/aquaflex-black.png" alt="Logo" class="w-[12rem]">
            </div>
        </a>

        <ul class="flex items-center">
            <li class="account-nav-item position-relative flex-col-align-center mr-4">
                <div class="cursor-pointer flex items-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                            class="dng-icon" viewBox="0 0 16 18">
                            <path
                                d="M1 17C1.80235 13.7794 4.63218 12.2887 8 12.2887C11.3678 12.2887 14.1976 13.7794 15 17M11.9375 5.00017C11.9375 7.20941 10.1746 9.00035 8 9.00035C5.82538 9.00035 4.0625 7.20941 4.0625 5.00017C4.0625 2.79094 5.82538 1 8 1C10.1746 1 11.9375 2.79094 11.9375 5.00017Z"
                                stroke="#171725" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </span>
                    <span class="text-[15px] text-black font-medium">Account</span>
                </div>
                {{-- <div class="acc-nav-popup pt-3">
                        <div class="dng-bg-white dng-rounded dng-border-gray-300 p-4" style="min-width: 170px;">
                            <ul>
                                <li class="dng-link mb-3">
                                    Login
                                </li>
                                <li class="dng-link"><strong>Signup</strong></li>
                            </ul>
                        </div>
                    </div> --}}
            </li>
            <li>
                <div role="button" aria-label="view basket" class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                        class="dng-icon" viewBox="0 0 20 17">
                        <path d="M1.3353 6.63135L18.6647 6.63135L15.9178 15.9999H4.08223L1.3353 6.63135Z"
                            stroke="#171725" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M4.34375 6.57904L7.07102 1M15.6569 6.57904L12.9297 1" stroke="#171725" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="text-[15px] text-black font-medium">
                        0 items
                    </span>
                </div>
            </li>
        </ul>
    </div>
    <div class="h-[47px] bg-[#fafafb] border border-t-[#e9ecee]"></div>

    {{-- <div class="header">
        <div class="header-2">
            <div id="menu-btn" class="icon fa-solid fa-bars-staggered"></div>

            <!-- == Logo == -->
            <a class="logo" href="/">
                <img src="/assets/images/logo.png" alt="logo" />
                <div class="logo-name">
                    <h3>Aquaflex</h3>
                    <p>Water & Blackcurrant Delivery Company</p>
                </div>
            </a>

            <div class="container">
                <!-- == Navbar == -->
                <nav class="navbar">
                    <a class="nav-btn" href="/">Home</a>

                    <div class="dropdown-menu">
                        <button class="nav-btn">
                            about <i class="fas fa-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/about">About Us</a>
                            <a href="/team">team</a>
                            <a href="/faqs">faqs</a>
                        </div>
                    </div>

                    <a href="/services" class="nav-btn">Services</a>
                    <!-- <a href="/project" class="nav-btn">Projects</a> -->

                    <div class="dropdown-menu">
                        <button class="nav-btn">
                            shop <i class="fas fa-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/shop-grid">Store</a>
                            <!-- <a href="/product-single">product Single</a> -->
                            <a href="/cart">Cart</a>
                            <!-- <a href="/checkout">Checkout</a> -->
                        </div>
                    </div>

                    <!-- <div class="dropdown-menu">
                <button class="nav-btn">
                  blog <i class="fas fa-angle-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="/blog-grid">blogs grid</a>
                  <a href="#">blog Single</a>
                </div>
              </div> -->

                    <div class="dropdown-menu">
                        <button class="nav-btn">
                            Logins <i class="fas fa-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/login">login</a>
                            <!-- <a href="/register">register</a>
                  <a href="/reset-password">forgot Password</a> -->
                        </div>
                    </div>

                    <a class="nav-btn" href="/contact">contact</a>
                </nav>

                <!-- == Icon Container == -->
                <div class="icon-container" id="cartIcon">
                    <div id="search" class="icon fa-solid fa-magnifying-glass"></div>
                    <a href="/login" id="login" class="icon fas fa-user"></a>
                    <a href="/cart" id="cart" class="icon fas fa-shopping-cart"><span
                            class="cart-count">{{ count((array) session('cart')) }}</span></a>
                </div>
            </div>

            <!-- == Search Container == -->
            <form action="https://aquadrop-html.asdesignsgalaxy.com/search.php" class="search-container">
                <input type="search" id="search-bar" placeholder="search here" />
                <label for="search-bar" class="fas fa-search"></label>
            </form>

            <!-- == Mobile Menu Area (Start) == -->
            <div class="mobile-menu">
                <nav class="mobile-navbar">
                    <div class="nav-link">
                        <div class="main-nav-link">
                            <a class="nav-btn" href="/">home</a>
                        </div>
                    </div>

                    <div class="nav-link">
                        <div class="main-nav-link">
                            <div class="nav-btn">about</div>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="sub-nav-link">
                            <a href="/about">about us</a>
                            <a href="/team">team</a>
                            <a href="/faqs">faqs</a>
                        </div>
                    </div>

                    <div class="nav-link">
                        <div class="main-nav-link">
                            <a href="/services" class="nav-btn">Services</a>
                        </div>
                    </div>

                    <div class="nav-link">
                        <div class="main-nav-link">
                            <div class="nav-btn">shop</div>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="sub-nav-link">
                            <a href="/shop-grid">Store</a>
                            <!-- <a href="/product-single">product Single</a> -->
                            <a href="/cart">Cart</a>
                            <!-- <a href="/checkout">checkout</a> -->
                        </div>
                    </div>

                    <div class="nav-link">
                        <div class="main-nav-link">
                            <div class="nav-btn">Logins</div>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="sub-nav-link">
                            <a href="/login">login</a>
                            <!-- <a href="/register">Register</a>
                  <a href="/reset-password">Forgot Password</a> -->
                        </div>
                    </div>

                    <div class="nav-link">
                        <div class="main-nav-link">
                            <a class="nav-btn" href="/contact.html">contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div> --}}
    <!-- ===== Header Area (Ends) ===== -->
</header>
<!-- ==================== Header Area (End) ==================== -->
