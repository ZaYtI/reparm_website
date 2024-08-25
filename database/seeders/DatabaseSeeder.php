<?php

namespace Database\Seeders;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Categories;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Categories::factory(10)->create();
        Product::factory(10)->create();
        Basket::factory(10)->create();
        BasketItem::factory(10)->create();
        Order::factory(10)->create();
    }
}
