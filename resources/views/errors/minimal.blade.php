<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Font-Awesome (CSS) -->
    <link rel="stylesheet" href="/vendors/font-awesome/css/all.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/webfont/css/general-sans.css" />

    @if (config('app.env') != 'production')
        @vite(['resources/css/app.css',])
    @endif
    @if (config('app.env') == 'production')
        <link rel="stylesheet" href="/build/assets/style-df337971.css" />
    @endif
</head>

<body class="">
    @include('components.header')

    <!-- ====== Error Section Start -->
    <section class="relative z-10 py-[120px] min-h-[100dvh] bg-gray-50 flex  justify-center items-center">
        <div class="container mx-auto">
            <div class="-mx-4 flex">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[400px] text-center">
                        <h2 class="mb-2 text-[50px] font-bold leading-none text-gray-600 sm:text-[80px] md:text-[100px]">
                            @yield('code')
                        </h2>
                        <h4 class="mb-3 text-[22px] font-semibold leading-tight text-gray-500">
                            @yield('message')
                        </h4>
                        {{-- <p class="mb-8 text-lg text-white">
                            The page you are looking for it maybe deleted
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div
            class="absolute top-0 left-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
            <div class="h-full w-1/3 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            <div class="flex h-full w-1/3">
                <div class="h-full w-1/2 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
                <div class="h-full w-1/2 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            </div>
            <div class="h-full w-1/3 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
        </div>
    </section>
    <!-- ====== Error Section End -->
</body>

</html>
