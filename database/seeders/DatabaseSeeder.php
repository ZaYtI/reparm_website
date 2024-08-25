<?php

namespace Database\Seeders;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Categories;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => "admin@example.com",
            'isAdmin' => true,
            'password' => Hash::make('admin')
        ]);
        Categories::factory(10)->create();
        Product::factory(10)->create();
        Basket::factory(10)->create();
        BasketItem::factory(10)->create();
        Order::factory(10)->create();
    }
}
