<?php

namespace App\Enums;

enum OrderStatusEnum : string
{
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case DELIVERED = 'delivered';
    case CANCELED = 'canceled';
    case REFUNDED = 'refunded';
    case ONHOLD = 'onhold';
    case COMPLETED = 'completed';

}
