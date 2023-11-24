<div class="w-full">
    <div class="">
        <div class="flex flex-col gap-5">
            <div class="">
                <h3 class="font-semibold text-3xl">Recent Orders</h3>
            </div>

            <table class="w-full flex flex-col order_table">

                <thead class="bg-gray-200 flex py-5 w-full font-medium">
                    <tr class="grid grid-cols-7 w-full text-xl">
                        <th class="font-semibold">Order Id
                        </th>
                        <th class="">Customer
                        </th>
                        <th class="">Prodcuts</th>
                        <th class="sherah-table__column-4 sherah-table__h4">Amount</th>
                        <th class="sherah-table__column-7 sherah-table__h7">Status</th>
                        <th class="sherah-table__column-5 sherah-table__h5">Payment Channel</th>
                        <th class="sherah-table__column-5 sherah-table__h5">Reference</th>
                    </tr>
                </thead>

                <tbody class="flex py-5 w-full flex-col">
                    @foreach ($orders as $order)
                        <tr class="grid grid-cols-7 w-full text-xl">
                            <td class="sherah-table__column-1 sherah-table__data-1">
                                <div class="sherah-table__product--id">
                                    <p class="crany-table__product--number"><a href="#">{{$order->order_id}}</a></p>
                                </div>
                            </td>
                            <td class="sherah-table__column-2 sherah-table__data-2">
                                <div class="sherah-table__product">
                                    <div class="sherah-table__product-img">
                                        <img src="img/customer-1.png" alt="#">
                                    </div>
                                    <div class="sherah-table__product-content">
                                        <p class="sherah-table__product-desc">{{$order->user->name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="sherah-table__column-3 sherah-table__data-3">
                                <div class="sherah-table__product">
                                    <div class="sherah-table__product-img">
                                        <img src="img/product-1.png" alt="#">
                                    </div>
                                    <div class="sherah-table__product-content">
                                        <p class="sherah-table__product-desc">Leather bag
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="sherah-table__column-4 sherah-table__data-4">
                                <h5 class="sherah-table__inner--title">@money($order->order_total)</h5>
                            </td>

                            <td class="sherah-table__column-7 sherah-table__data-7">
                                <div class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">
                                    {{$order->orderStatus->status}}</div>
                            </td>
                            <td class="sherah-table__column-7 sherah-table__data-7">
                                <div class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">
                                    {{$order->payment_channel}}</div>
                            </td>
                            <td class="sherah-table__column-7 sherah-table__data-7">
                                <div class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">
                                    {{$order->reference}}</div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>
</div>
