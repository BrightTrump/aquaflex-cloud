<div id="cart_remove" class="hidden min-h-screen absolute w-full top-0 justify-center items-center" >
        <div
            class="w-[50rem] bg-white drop-shadow-md rounded-xl p-14 flex flex-col gap-6 relative border border-gray-150">
            <span x-on:click="closeDeleteModal" class="absolute right-14 top-14 "><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="15" height="15" viewBox="0,0,256,256">
                    <g transform="translate(-81.92,-81.92) scale(1.64,1.64)">
                        <g fill="#333434" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(10.66667,10.66667)">
                                <path
                                    d="M5.99023,4.99023c-0.40692,0.00011 -0.77321,0.24676 -0.92633,0.62377c-0.15312,0.37701 -0.06255,0.80921 0.22907,1.09303l5.29297,5.29297l-5.29297,5.29297c-0.26124,0.25082 -0.36647,0.62327 -0.27511,0.97371c0.09136,0.35044 0.36503,0.62411 0.71547,0.71547c0.35044,0.09136 0.72289,-0.01388 0.97371,-0.27511l5.29297,-5.29297l5.29297,5.29297c0.25082,0.26124 0.62327,0.36648 0.97371,0.27512c0.35044,-0.09136 0.62411,-0.36503 0.71547,-0.71547c0.09136,-0.35044 -0.01388,-0.72289 -0.27512,-0.97371l-5.29297,-5.29297l5.29297,-5.29297c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-5.29297,5.29297l-5.29297,-5.29297c-0.18827,-0.19353 -0.4468,-0.30272 -0.7168,-0.30273z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg></span>
            <h1 class="text-[2.25rem] font-semibold">Remove from cart</h1>
            <p class="text-[1.65rem] font-medium">Do you really want to remove this item from cart?</p>
            <div
                class="flex gap-3 items-center bg-red-400 h-16 px-10 text-white rounded-xl justify-center text-[16px] font-semibold col-span-2 relative">
                <i class="icon fa-solid fa-trash-arrow-up absolute left-10 "></i>REMOVE
            </div>
        </div>
    </div>
