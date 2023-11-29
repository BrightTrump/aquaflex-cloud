@props(['title' => ''])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>

    <!-- Font-Awesome (CSS) -->
    <link rel="stylesheet" href="/vendors/font-awesome/css/all.css" />

    <!-- Magnific-Popup (CSS) -->
    <link rel="stylesheet" href="/vendors/magnific-popup/magnific-popup.css" />

    <!-- Swiper (CSS) -->
    <link rel="stylesheet" href="/vendors/swiper/swiper.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <link rel="stylesheet" href="/assets/css/custom.css" />
    <link rel="stylesheet" href="/assets/webfont/css/general-sans.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="/assets/js/alpinejs.min.js"></script>


    @if (config('app.env') != 'production')
        @vite(['resources/css/app.css'])
    @endif
    @if (config('app.env') == 'production')
        <link rel="stylesheet" href="/build/assets/style-1b6698d3.css" />
    @endif
</head>

<body>


    <!-- ==================== Scroll-Top Area (Start) ==================== -->
    <a href="#" class="scroll-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- ==================== Scroll-Top Area (End) ==================== -->

    @include('components.header')

    {{ $slot }}

    @include('components.footer')

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
</body>

</html>
