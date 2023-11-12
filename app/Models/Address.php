<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    public function userAddress(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
