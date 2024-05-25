<?php

namespace Database\Seeders;

use App\Models\Ingredients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Ingredients = [
            [
                'item_id' => 1,
                'product_id' => 1,

            ],
            [

                'item_id' => 2,
                'product_id' => 1,
            ],
            [

                'item_id' => 4,
                'product_id' => 1,
            ],
        ];
        Ingredients::query()->insert($Ingredients);
    }
}