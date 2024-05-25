<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Order = [

            [
                'total' => 45000,
                'no_antrian' => 1,
                'status' => 'menunggu konfirmasi',
                'meja_id' => 1

            ],
            [


                'total' => 25000,
                'no_antrian' => 2,
                'status' => 'sudah dikonfirmasi',
                'meja_id' => 2
            ],
            [


                'total' => 10000,
                'no_antrian' => 3,
                'status' => 'menunggu konfirmasi',
                'meja_id' => 3
            ],
        ];
      Order::query()->insert($Order);
    }
}
