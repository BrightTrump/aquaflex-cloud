<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Enums\OrderStatusEnum;

class FinancialSummaryService
{
    public function getTotalSales()
    {
        return $this->getOrderSummaryWithStatus(OrderStatusEnum::PROCESSING);
    }

    public function getTotalOrder()
    {
        return $this->getOrderSummaryWithStatus(OrderStatusEnum::PENDING);
    }

    private function getOrderSummaryWithStatus(OrderStatusEnum $orderStatusEnum)
    {
        $total = 0;

        // Get all ready where status is 'processing'
        $orders = Order::where('order_status_id', OrderStatus::where('status', $orderStatusEnum)->first()->id)->get();

        foreach ($orders as $order) {
            $total += $order->order_total;
        }

        return $total;
    }
}
