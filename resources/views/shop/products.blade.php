@php
    // use Illuminate\Support\Facades\Session;
    // Session::forget('cart');

@endphp
<x-guest-layout :title="'Shop Now'">
    <section class="mt-[70px] bg-gray-50">

        @includeWhen($products, 'components.product-card')

        </div>

        @if(count($products) == 0)
        <div
            class="py-[32px] bg-white border border-gray-150 rounded-xl w-full flex flex-col justify-center items-center gap-6">
            <img class="-mvs" src="/assets/images/icons8-shop-94.png" height="100" width="100" alt="">
            <h2 class="text-4xl font-semibold">Store is empty!</h2>
            <p class="text-3xl">Products will be added soon!</p>

        </div>
        @endif

    </section>
</x-guest-layout>
