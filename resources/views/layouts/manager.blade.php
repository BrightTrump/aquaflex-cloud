@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>

    <!-- Scripts -->
   @vite([
        'resources/shopo/bootstrap.min.css',
	    'resources/shopo/font-awesome-all.min.css',
	    'resources/shopo/datatables.min.css',
	    'resources/shopo/jvector-map.css',
	    'resources/shopo/slickslider.min.css',
	    'resources/shopo/jquery-ui.css',
	    'resources/shopo/reset.css',
	    'resources/shopo/style.css',
	    'resources/css/app.css',
	    'resources/css/style.css',
    ])
</head>

<body id="sherah-dark-light">

    <div class="sherah-body-area">

        <!-- ==== SideBar Menu Start ==== -->
        @include('components.admin-sidebar')
        <!-- == SideBar Menu End == -->

        <!-- == Header Start == -->
        @include('components.admin-header')
        <!-- == Header End == -->

        {{ $slot }}
    </div>

    @vite([
        'resources/shopo/js/jquery.min.js',
        'resources/shopo/js/jquery-migrate.js', 'resources/shopo/js/jquery-ui.min.js', 'resources/shopo/js/popper.min.js',
        'resources/shopo/js/bootstrap.min.js', 'resources/shopo/js/charts.js',
        'resources/shopojs/jquery-jvectormap.js', 'resources/shopo/js/jvector-map.js',
        'resources/shopo/js/slickslider.min.js', 'resources/shopo/js/main.js',
        ])

</body>

</html>
