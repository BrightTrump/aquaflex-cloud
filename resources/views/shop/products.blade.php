@php
    // use Illuminate\Support\Facades\Session;
    // Session::forget('cart');
    
@endphp
<x-guest-layout :title="'Shop Now'">
    @include('components.header')

    <section class="">
        <div class="grid grid-cols-4 xm:max-lx:grid-cols-2 mb-4 gap-4">
            @foreach ($products as $product)
                @foreach ($product->productItems as $productItem)
                    <div
                        class="h-fit border border-gray-150 rounded-xl border-b-2 drop-shadow-sm bg-white border-b-secondary p-2">
                        <div class="h-[17rem] w-full rounded-xl">
                            <img src="{{ $productItem->product_image }}" class="w-full h-full object-cover rounded-xl" />
                        </div>
                        <div class="p-8 text-[20px] font-semibold flex flex-col gap-6 justify-between h-full">

                            <div class="h-[13rem] gap-5 flex flex-col justify-between">

                                <div class="">
                                    <h1 class="text-[22px]">{{ $product->name }}</h1>
                                </div>

                                <div class="flex flex-col gap-6">
                                    <div class="w-full h-[5.5rem] bg-sky-50 border border-sky-300 rounded-[1rem] p-4">
                                        <h1 class="font-semibold text-[13px]">
                                            {{ $productItem->size }}{{ $productItem->unit }} x
                                            {{ $productItem->contain }} Bottle</h1>
                                        <span class="text-[10px] block">{{ $productItem->size }}{{ $productItem->unit }}
                                            x
                                            {{ $productItem->contain }}Bottle</span>
                                    </div>
                                    <div class="w-full">
                                        ₦{{ $productItem->price }}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('add_to_cart', $productItem->id) }}"
                                    class="bg-primary w-full h-[5rem] rounded-xl relative flex items-center justify-center px-4 text-[15px] text-white hover:bg-secondary">
                                    <span class="absolute left-6"> <svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0,0,256,256">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(8,8)">
                                                    <path
                                                        d="M4,7c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1h2.21875l2.625,10.5c0.22266,0.89063 1.01953,1.5 1.9375,1.5h12.46875c0.90234,0 1.66797,-0.59766 1.90625,-1.46875l2.59375,-9.53125h-2.09375l-2.40625,9h-12.46875l-2.625,-10.5c-0.22266,-0.89062 -1.01953,-1.5 -1.9375,-1.5zM22,21c-1.64453,0 -3,1.35547 -3,3c0,1.64453 1.35547,3 3,3c1.64453,0 3,-1.35547 3,-3c0,-1.64453 -1.35547,-3 -3,-3zM13,21c-1.64453,0 -3,1.35547 -3,3c0,1.64453 1.35547,3 3,3c1.64453,0 3,-1.35547 3,-3c0,-1.64453 -1.35547,-3 -3,-3zM16,7v3h-3v2h3v3h2v-3h3v-2h-3v-3zM13,23c0.5625,0 1,0.4375 1,1c0,0.5625 -0.4375,1 -1,1c-0.5625,0 -1,-0.4375 -1,-1c0,-0.5625 0.4375,-1 1,-1zM22,23c0.5625,0 1,0.4375 1,1c0,0.5625 -0.4375,1 -1,1c-0.5625,0 -1,-0.4375 -1,-1c0,-0.5625 0.4375,-1 1,-1z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg></span>
                                    ADD TO CART </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
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

    @include('components.footer')
</x-guest-layout>
