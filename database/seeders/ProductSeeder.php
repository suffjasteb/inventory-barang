<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            "name" => "Thinkpad x280",
            "description" => "Thinkpad x280 adalah produk made in China",
            "sku" => "1234-ok",
            "price" => 10000,
            "stock" => 500,
            "category_id" => 1,
        ]);
    }
}
