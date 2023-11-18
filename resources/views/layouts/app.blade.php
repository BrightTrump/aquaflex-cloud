@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="stylesheet" href="/assets/css/user.css" />
    <link rel="stylesheet" href="/assets/webfont/css/general-sans.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="/assets/js/alpinejs.min.js"></script>


    @if (config('app.env') != 'production')
        @vite(['resources/css/app.css',])
    @endif
    @if (config('app.env') == 'production')
        <link rel="stylesheet" href="/build/assets/style-2a89d25d.css" />
    @endif
</head>

<body class="bg-gray-50">

    @include('components.header')
    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex relative py-10 px-20">

        <!-- ===== Sidebar Start ===== -->
        @include('components.customer-side-bar')
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative">


            <!-- ===== Main Content Start ===== -->
            {{ $slot }}
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>

</html>
