@php $total = 0 @endphp
<x-guest-layout :title="'Cart'">
    @include('components.header')
    <section class="px-30 flex gap-20 justify-between bg-gray-50">
        @if (session('cart') && !Auth::check())
            @include('components.session-cart')
        @endif
        @if ($cartItems && count($cartItems) > 0 && Auth::check())
            @include('components.cart-items')
        @endif
        @if (!session('cart') && count($cartItems) == 0)
            <div
                class="py-[32px] bg-white border border-gray-150 rounded-xl w-full flex flex-col justify-center items-center gap-6">
                <img class="-mvs" src="/assets/images/cart-750.png" height="100" width="100" alt="">
                <h2 class="text-3xl font-medium">Your cart is empty!</h2>
                <p class="text-2xl">Browse our categories and discover our best deals!</p>
                <a href="/products"
                    class="bg-primary rounded-md py-4 px-6 text-2xl font-medium uppercase text-white ">Start
                    Shopping</a>
            </div>
        @endif

    </section>
    <!-- ==================== Cart Area (End) ==================== -->
    @include('components.footer')
    @include('components.cart-delete-alert')

</x-guest-layout>
