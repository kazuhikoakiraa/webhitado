<?php

namespace Database\Seeders;
use App\Models\OrderProduct;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProdcutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $OrderProduct = [
            [
                'order_id' => 1,
                'product_id' => 1,

            ],
            [

                'order_id' => 1,
                'product_id' => 2,
            ],
            [

                'order_id' => 1,
                'product_id' => 3,
            ],
        ];
        OrderProduct::query()->insert($OrderProduct);
    }
}