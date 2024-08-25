<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Basket extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Basket::class);
    }

    public function basketItems()
    {
        return $this->hasMany(BasketItem::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
