@props(['title'])

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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Stylesheets -->
    {{-- <link rel="stylesheet" href="/build/assets/style-68f7ae22.css" /> --}}
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <link rel="stylesheet" href="/assets/css/custom.css" />
    <link rel="stylesheet" href="/assets/webfont/css/general-sans.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        tailwind.config = {
            content: [
                './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
                './storage/framework/views/*.php',
                './resources/views/**/*.blade.php',
            ],
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['GeneralSans-Variable', ...defaultTheme.fontFamily.sans],
                    },
                    colors: {
                        primary: '#00ccff',
                        secondary: '#002c8f',
                        'gray-350': '#C6C6C7',
                        'gray-150': '#e9ecee',
                        'sky-150': '#EBF0FF'
                        // ...
                    },
                    screens: {
                        xs: "280px",
                        xm: "570px",
                        lx: "912px",
                        xml: "420px",
                    }
                },
            },
            plugins: [forms],
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: "GeneralSans-Variable", sans-serif;
            }

            .dropdownmenu li {
                position: relative;
                height: 100%;
                display: flex;
                align-items: center;
                padding: 0 20px;
            }

            .dropdownmenu a {
                display: block;
                text-align: center;
                text-decoration: none;
                transition: all 0.25s ease;
            }

            #submenu {
                /* border: 1px solid #e9ecee; */
                background-color: #fff;
                border-radius: 4px;
                left: 0;
                opacity: 0;
                position: absolute;
                top: 42px;
                visibility: hidden;
                z-index: 9999;
            }

            li:hover ul#submenu {
                opacity: 1;
                top: 35px;
                visibility: visible;
            }

            #submenu li {
                padding: 10px 20px;
            }

            #submenu li:hover {
                background-color: #f8f8f8;
            }

        }
    </style>
</head>

<body>


    <!-- ==================== Scroll-Top Area (Start) ==================== -->
    <a href="#" class="scroll-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- ==================== Scroll-Top Area (End) ==================== -->

    {{ $slot }}

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
