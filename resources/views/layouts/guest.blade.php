@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }} | {{$title}}</title>

    <!-- Font-Awesome (CSS) -->
    <link rel="stylesheet" href="/vendors/font-awesome/css/all.css" />

    <!-- Magnific-Popup (CSS) -->
    <link rel="stylesheet" href="/vendors/magnific-popup/magnific-popup.css" />

    <!-- Swiper (CSS) -->
    <link rel="stylesheet" href="/vendors/swiper/swiper.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Custom Stylesheets -->
    @vite([
        'public/assets/css/main.css',
        'public/assets/css/responsive.css',
        'public/assets/assets/css/custom.css',
        'resources/css/app.css',
        'public/assets/webfont/css/general-sans.css'
        ])
</head>

<body>


    <!-- ==================== Scroll-Top Area (Start) ==================== -->
    <a href="#" class="scroll-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- ==================== Scroll-Top Area (End) ==================== -->

    {{ $slot }}

    @yield('scripts')
    <!-- Jquery -->
    <script src="/vendors/jquery/jquery-3.6.0.js"></script>

    <!-- Magnific-Popup JS -->
    <script src="/vendors/magnific-popup/jquery.magnific-popup.js"></script>

    <!-- Swiper (JS) -->
    <script src="/vendors/swiper/swiper.js"></script>

    <!-- Custom Script Files -->
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/nav-link-toggler.js"></script>
    <script src="/assets/js/home-slider.js"></script>
    <script src="/assets/js/counter-up.js"></script>
    <script src="/assets/js/projects.js"></script>
    <script src="/assets/js/testi-slider.js"></script>
    <script src="/assets/js/sponsor-slider.js"></script>
    <script src="/assets/js/add-to-cart.js"></script>
</body>

</html>
