<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\meja;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meja = [
            [
                'nomor_meja' => 1,
            ],
            [
                'nomor_meja' => 2,
            ],
            [
                'nomor_meja' => 3,
            ],
            [
                'nomor_meja' => 4,
            ],
            [
                'nomor_meja' => 5,
            ],
            [
                'nomor_meja' => 6,
            ],
            [
                'nomor_meja' => 7,
            ],
            [
                'nomor_meja' => 8,
            ],
            [
                'nomor_meja' => 9,
            ],
        ];
       meja::query()->insert($meja);
    }
}
