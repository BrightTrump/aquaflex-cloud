<div class="basis-[30%] bg-white border border-gray-150 h-fit rounded-3xl px-10 py-16 flex flex-col gap-14">
    <div class="flex flex-col gap-5">
        <h1 class="font-semibold text-4xl">Order Summary</h1>
        <div class="bg-gray-50 h-auto rounded-xl p-8">
            <div class="flex flex-col gap-5">
                <div class="grid grid-cols-2 text-2xl"><span>Subtotal</span>
                    <span class="font-semibold flex justify-end">NGN {{ $total }}</span>
                </div>
                <div class="grid grid-cols-2 text-2xl"><span>Delivery</span>
                    <span class="font-semibold flex just ify-end">-</span>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('checkout') }}" class="flex flex-col gap-8">
        @csrf
        <div class="grid grid-cols-3 text-2xl gap-6">
            <span>Order Total</span>
            <span class="col-span-2 font-semibold text-3xl flex justify-end text-secondary">NGN
                {{ $total}}</span>
        </div>
        <input type="hidden" name="amount" value="{{$total}}">

        <button type="submit"
            class="flex items-center justify-center bg-primary py-6 rounded-xl text-2xl font-semibold text-white">Proceed
            to
            Checkout</button>
    </form>
</div>
