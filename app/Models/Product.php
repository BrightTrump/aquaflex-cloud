<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "collection",
        "name",
        "price",
        "description",
        "measurement",
        "thumbnail",
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
