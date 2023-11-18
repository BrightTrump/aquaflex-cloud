@php
    use App\Http\Controllers\CartController;

    $cartController = new CartController();

@endphp
<!-- ==================== Header Area (Start) ==================== -->
<header class="bg-white">
    <!-- ===== Header Area (Start) ===== -->


    <div class="justify-between flex items-center py-3 px-16 h-[70px] border-b border-gray-150">
        <div class="flex gap-10">
            <i class="lg:hidden fas fa-bars text-4xl"></i>
            <a href="/" class="" aria-label="go to homepage" aria-current="page">
                <div class="dng-logotype">
                    <img src="/assets/images/Logo/aquaflex-black.png" alt="Logo" class="w-[12rem]">
                </div>
            </a>
        </div>
        <nav class="dropdownmenu lg:flex hidden">
            <ul class="flex text-[16px] font-medium w-full h-full items-center">
                <li><a href="/">Home</a></li>
                <li><a href="">About<i class="fas fa-angle-down ml-3"></i></a>
                    <ul id="submenu" class="w-[14rem] border-l-4 border-primary drop-shadow-xl">
                        <li><a href="/about">About Us</a></li>
                        <li> <a href="/team">Team</a></li>
                        <li><a href="/faqs">FAQs</a></li>
                    </ul>
                </li>
                <li><a href="/services">Services</a></li>
                <li><a href="/products">Shop Now</a></li>
                <li><a class="" href="/contact">Contact Us</a></li>
            </ul>
        </nav>

        <ul class="flex items-center text-[16px] gap-5 font-medium">
            <li class="xm:flex hidden account-nav-item position-relative flex-col-align-center mr-4">
                <div class="cursor-pointer flex items-center gap-2 relative">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                            class="dng-icon" viewBox="0 0 16 18">
                            <path
                                d="M1 17C1.80235 13.7794 4.63218 12.2887 8 12.2887C11.3678 12.2887 14.1976 13.7794 15 17M11.9375 5.00017C11.9375 7.20941 10.1746 9.00035 8 9.00035C5.82538 9.00035 4.0625 7.20941 4.0625 5.00017C4.0625 2.79094 5.82538 1 8 1C10.1746 1 11.9375 2.79094 11.9375 5.00017Z"
                                stroke="#171725" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </span>
                    <span class="">

                        @if (!Auth::check())
                            Account
                            <ul id="submenu" class="w-[20rem] border-l-4 border-primary drop-shadow-xl">
                                <li><a href="/login">Login</a></li>
                                <li> <a href="/register">Create Acccount</a></li>
                            </ul>
                        @endif
                        @if (Auth::check())
                            <span class="font-semibold">Hi, {{ strtok(Auth::user()->name, ' ') }}</span><i
                                class="fas fa-angle-down ml-3"></i>
                            <ul id="submenu"
                                class="font-medium border border-t-gray-150 border-b-gray-150 border-r-gray-150 text-gray-600  text-[14px] w-[20rem] border-l-4 border-primary drop-shadow-xl">
                                <li> <a href="/dashboard">My Account</a></li>
                                <li><a href="/login">My Order</a></li>
                                <li> <a href="/signup">Pending Reviews</a>
                                </li>
                                <li> <a href="/signup">Favorites</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                            class="font-semibold hover:text-[var(--primary-color)]">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        @endif
                    </span>
                </div>
            </li>
            <li>
                <a href="/cart" role="button" aria-label="view basket" class="flex items-center gap-4">

                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0,0,256,256">
                            <g transform="translate(-38.4,-38.4) scale(1.3,1.3)">
                                <g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8,8)">
                                        <path
                                            d="M5,7c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1h2.21875l2.625,10.5c0.22266,0.89063 1.01953,1.5 1.9375,1.5h11.46875c0.90234,0 1.66797,-0.59766 1.90625,-1.46875l2.59375,-9.53125h-16.75l0.5,2h13.65625l-1.90625,7h-11.46875l-2.625,-10.5c-0.22266,-0.89062 -1.01953,-1.5 -1.9375,-1.5zM22,21c-1.64453,0 -3,1.35547 -3,3c0,1.64453 1.35547,3 3,3c1.64453,0 3,-1.35547 3,-3c0,-1.64453 -1.35547,-3 -3,-3zM13,21c-1.64453,0 -3,1.35547 -3,3c0,1.64453 1.35547,3 3,3c1.64453,0 3,-1.35547 3,-3c0,-1.64453 -1.35547,-3 -3,-3zM13,23c0.5625,0 1,0.4375 1,1c0,0.5625 -0.4375,1 -1,1c-0.5625,0 -1,-0.4375 -1,-1c0,-0.5625 0.4375,-1 1,-1zM22,23c0.5625,0 1,0.4375 1,1c0,0.5625 -0.4375,1 -1,1c-0.5625,0 -1,-0.4375 -1,-1c0,-0.5625 0.4375,-1 1,-1z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        @if (session('cart'))
                            <span
                                class="bg-primary h-7 w-7 flex text-[12px] absolute font-semibold justify-center items-center -right-2 top-0 rounded-full text-white">
                                @php $totalQty = 0 @endphp
                                @foreach (session('cart') as $id => $details)
                                    @php
                                        $totalQty += $details['qty'];
                                    @endphp
                                @endforeach
                                {{ $totalQty }}
                            </span>
                        @endif
                        @if ($cartController->countQuantity() !== 0 && Auth::check())
                            <span
                                class="bg-primary h-7 w-7 flex text-[12px] absolute font-semibold justify-center items-center -right-2 top-0 rounded-full text-white">
                                {{ $cartController->countQuantity() }}
                            </span>
                        @endif
                    </div>
                    Cart
                </a>
            </li>
        </ul>
    </div>

    {{-- Responsive NavBar --}}
    {{-- <div class="lx:hidden flex items-center py-3 px-16 h-[59px] border-b border-gray-150">
        <!-- Menu toggle -->
        <div class="flex gap-10">
            <i class="fas fa-bars text-4xl"></i>
            <a href="/" class="" aria-label="go to homepage" aria-current="page">
                <div class="dng-logotype">
                    <img src="/assets/images/Logo/aquaflex-black.png" alt="Logo" class="w-[12rem]">
                </div>
            </a>
        </div>

    </div> --}}

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
