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
               
                'section' =>'profile',
                'description' => 'ini contoh aja',
                'img' => 'test.png'

            ],
            [

                'section' =>'about',
                'description' => 'ini contoh aja',
                'img' => 'test.png'
            ],
            [

                'section' =>'explore',
                'description' => 'ini contoh aja',
                'img' => 'test.png'
            ],
        ];
        Homepage::query()->insert($Homepage);
    }
}