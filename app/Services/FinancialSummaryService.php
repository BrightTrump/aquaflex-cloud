<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Enums\OrderStatusEnum;

class FinancialSummaryService
{
    public function getTotalSales(){
        $totalSales = 0;

        // Get all ready where status is 'processing'
        $orders = Order::where('order_status_id', OrderStatus::where('status', OrderStatusEnum::PROCESSING)->first()->id)->get();

        foreach ($orders as $order) {
            $totalSales += $order->order_total;
        }

        return $totalSales;
    }
}
