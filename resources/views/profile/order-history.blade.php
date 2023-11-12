<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Title -->
    <title>AquaFlex | Water & Blackcurrant Delivery Company</title>

    <!-- Font-Awesome (CSS) -->
    <link rel="stylesheet" href="/vendors/font-awesome/css/all.css" />


    <!-- Custom Stylesheets -->
    @vite([
        'public/assets/css/user.css', 
        'public/assets/css/main.css', 
        'resources/css/app.css'])
</head>

<body>
    {{-- Order History starts here --}}
    <div class="order-parent">
        <h3 class="title">Order History</h3>
        <div class="order-container">
            <div class="content-div">
                <div class="content">
                    <div class="img-div">
                        <img src="/assets/images/blackcurrant (6).jpg" alt="" class="order-img">
                    </div>
                </div>
                <div class="content goods-content">
                    <p class="desc">Blackcurrant 25 Litres</p>
                    <p class="goods-id">354097657</p>
                    <span class="goods-status">Delivered</span>
                    <p class="status-date">On 31-10-2023</p>
                </div>
            </div>
            <div class="details-div">
                <a href="/order-details" class="details-li">See Details</a>
            </div>
        </div>


    </div>
    {{-- Order History ends here --}}
</body>

</html>
