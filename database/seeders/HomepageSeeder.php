<?php

namespace Database\Seeders;

use App\Models\Homepage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Homepage = [
            [
                'description' => 'ini contoh aja',
                'img' => 'test.png'

            ],
            [

                'description' => 'ini contoh aja',
                'img' => 'test.png'
            ],
            [

                'description' => 'ini contoh aja',
                'img' => 'test.png'
            ],
            [

                'description' => 'ini contoh aja',
                'img' => 'test.png'
            ],
        ];
        Homepage::query()->insert($Homepage);
    }
}