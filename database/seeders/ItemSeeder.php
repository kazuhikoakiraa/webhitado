<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Item = [
            [
                'nama' => 'kopi',
                'stock' => 1,
                'satuan' => 'Kilogram',

            ],
            [
                'nama' => 'gula',
                'stock' => 1,
                'satuan' => 'Kilogram',
            ],
            [

                'nama' => 'teh',
                'stock' => 1,
                'satuan' => 'Kilogram',
            ],
            [

                'nama' => 'air',
                'stock' => 1,
                'satuan' => 'Liter',
            ],
        ];
        Item::query()->insert($Item);
    }
}
