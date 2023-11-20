<div class="grid grid-cols-3 xm:max-lx:grid-cols-2 xs:max-xm:grid-cols-1 mb-4 gap-10">
    @foreach ($products as $product)
        @foreach ($product->productItems as $productItem)
            <div class="h-fit border border-gray-150 border-b-2 bg-white border-b-secondary">
                <div class="h-[24rem] w-full relative">
                    <img src="{{ $productItem->product_image }}" class="w-full h-full object-cover " />
                    <div
                        class="absolute bottom-5 right-5 flex justify-center items-center text-white bg-secondary p-4 min-w-[7rem]">
                        <h1 class="font-semibold text-[16px] z-10">
                            {{ $productItem->size }}{{ $productItem->unit }}
                            @if ($productItem->unit != 'L')
                                x
                                {{ $productItem->contain }} Bottle
                        </h1>
        @endif
</div>
</div>
<div class="p-8 text-[20px] font-semibold flex flex-col gap-2 justify-between h-full">

    <div class=" flex flex-col items-cente h-[10rem]">
        <h1 class="text-[26px] text-secondary leading-none">{{ $product->name }}</h1>
        <h2 class="text-primary text-4xl">
            ₦{{ $productItem->price }}
        </h2>

    </div>
    <div class="flex gap-4">
        <a href="{{ route('add_to_cart', $productItem->id) }}"
            class="bg-primary w-full h-[4rem] relative flex items-center justify-center px-4 text-[13px] text-white hover:bg-secondary">
            <span class="absolute left-6"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                    height="30" viewBox="0,0,256,256">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(8,8)">
                            <path
                                d="M4,7c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1h2.21875l2.625,10.5c0.22266,0.89063 1.01953,1.5 1.9375,1.5h12.46875c0.90234,0 1.66797,-0.59766 1.90625,-1.46875l2.59375,-9.53125h-2.09375l-2.40625,9h-12.46875l-2.625,-10.5c-0.22266,-0.89062 -1.01953,-1.5 -1.9375,-1.5zM22,21c-1.64453,0 -3,1.35547 -3,3c0,1.64453 1.35547,3 3,3c1.64453,0 3,-1.35547 3,-3c0,-1.64453 -1.35547,-3 -3,-3zM13,21c-1.64453,0 -3,1.35547 -3,3c0,1.64453 1.35547,3 3,3c1.64453,0 3,-1.35547 3,-3c0,-1.64453 -1.35547,-3 -3,-3zM16,7v3h-3v2h3v3h2v-3h3v-2h-3v-3zM13,23c0.5625,0 1,0.4375 1,1c0,0.5625 -0.4375,1 -1,1c-0.5625,0 -1,-0.4375 -1,-1c0,-0.5625 0.4375,-1 1,-1zM22,23c0.5625,0 1,0.4375 1,1c0,0.5625 -0.4375,1 -1,1c-0.5625,0 -1,-0.4375 -1,-1c0,-0.5625 0.4375,-1 1,-1z">
                            </path>
                        </g>
                    </g>
                </svg></span>
            ADD TO CART </a>
        @if (Auth::user()->role->name == 'ADMIN')
            <a href="{{route('edit_product', $productItem->id)}}" class="flex justify-center items-center hover:bg-secondary bg-primary h-[4rem] px-5 text-white">
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252"
                    viewBox="0 0 18.29 18.252">
                    <g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
                        <path id="Path_481" data-name="Path 481"
                            d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z"
                            transform="translate(0 -39.652)" fill="#fff" />
                        <path id="Path_482" data-name="Path 482"
                            d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z"
                            transform="translate(-84.622 -32.286)" fill="#fff" />
                        <path id="Path_483" data-name="Path 483"
                            d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z"
                            transform="translate(-182.038)" fill="#fff" />
                    </g>
                </svg>
            </a>
        @endif
    </div>
</div>
</div>
@endforeach
@endforeach
</div>
