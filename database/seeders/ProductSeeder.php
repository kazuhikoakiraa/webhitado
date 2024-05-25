<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Product = [
            [
                'nama' => 'Kopi Hitam',
                'kategori' => 'minuman',
                'harga' => 10000,
                'img' => 'test.png',
                'id_product' => 1

            ],
            [


                'nama' => 'Kentang Goreng',
                'kategori' => 'makanan',
                'harga' => 10000,
                'img' => 'test.png',
                'id_product' => 2
            ],
            [


                'nama' => 'Kopi Susu',
                'kategori' => 'minuman',
                'harga' => 15000,
                'img' => 'test.png',
                'id_product' => 3
            ],
            [


                'nama' => 'Nasi Goreng',
                'kategori' => 'makanan',
                'harga' => 12000,
                'img' => 'test.png',
                'id_product' => 4
            ],
        ];
        Product::query()->insert($Product);
    }
}