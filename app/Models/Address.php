<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_line1',
        'address_line2',
        'state',
        'city',
        'lga',
    ];

    public function userAddress(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
