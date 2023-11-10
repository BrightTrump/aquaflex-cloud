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
    <link rel="stylesheet" href="/public/assets/webfont/css/general-sans.css');" />


    <!-- Custom Stylesheets -->
    @vite([
        'public/assets/css/user.css', 
        'public/assets/css/main.css', 
        'resources/css/app.css']
        )
</head>

<body>
    {{-- Order Details ends here --}}
    <div class="order-details-parent">
        <h3 class="title">Items in Your Order</h3>
        <div class="order-container">
            <span class="goods-status">Delivered</span>
            <span class="goods-status-2">Non-Returnable</span>
            <div class="content-parent">
                <div class="content-div">
                    <div class="content">
                        <div class="img-div">
                            <img src="/assets/images/blackcurrant (6).jpg" alt="" class="order-img">
                        </div>
                    </div>
                    <div class="content goods-content">
                        <p class="desc">Blackcurrant 25 Litres</p>
                        <p class="qty">Quantity: 1</p>
                        <p class="amnt">₦ 2,799 <span> ₦10,000</span></p>
                    </div>
                </div>
                <div class="buy-cta-div">
                    <button class="buy-cta">Buy Again</button>
                </div>
            </div>
        </div>


    </div>
    {{-- Order Details ends here --}}

    {{-- Payment and Delivery Information starts here --}}
    <div class="info-parent">
        <div class="info-content">
            <h3 class="info-head">Payment Information</h3>
            <div class="payment-div">
                <p class="p-method">Payment Method</p>
                <p class="p-method-desc">Pay with Cards, Bank Transfer or USSD</p>
            </div>
            <div class="payment-div">
                <p class="p-method-desc">Items Total: ₦ 2,799 </p>
                <p class="p-method-desc">Delivery Fees: ₦ 640</p>
                <p class="p-method">Total: ₦ 3,439</p>
            </div>
        </div>
        <div class="info-content">
            <h3 class="info-head">Delivery Information</h3>
            <div class="payment-div">
                <p class="p-method">Delivery Method</p>
                <p class="p-method-desc">Home/Office</p>
            </div>
            <div class="payment-div">
                <p class="p-method">Delivery Address</p>
                <p class="p-method-desc">156 PTI Road, Efurun Delta State Trap Petrol, Effurun GRA WARRI-EFURUN, Delta
                    State.</p>
            </div>
            <div class="payment-div">
                <p class="p-method">Opening Hours:</p>
                <p class="p-method-desc">Mon-Fri 8AM-6PM; Sat 8am-6pm</p>
            </div>
        </div>
    </div>
    {{-- Payment and Delivery Information ends here --}}
</body>

</html>
