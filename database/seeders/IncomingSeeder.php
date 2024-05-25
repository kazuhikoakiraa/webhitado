<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Incoming;

class IncomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Incoming = [
            [
                'item_id' => 1,
                'nama' => 'nasi',
                'kategori' => 'Makanan',
                'harga' => 10000,
                'stock' => 1,
                'satuan' => 'Kilogram',

            ],
            [

                'item_id' => 2,
                'nama' => 'gula',
                'kategori' => 'Minuman',
                'harga' => 10000,
                'stock' => 1,
                'satuan' => 'Kilogram',
            ],
            [

                'item_id' => 3,
                'nama' => 'teh',
                'kategori' => 'Minuman',
                'harga' => 10000,
                'stock' => 1,
                'satuan' => 'Kilogram',
            ],
            [

                'item_id' => 4,
                'nama' => 'air',
                'kategori' => 'Minuman',
                'harga' => 10000,
                'stock' => 1,
                'satuan' => 'Liter',
            ],
        ];
        Incoming::query()->insert($Incoming);
    }
}
