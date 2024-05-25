<?php

namespace Database\Seeders;

use App\Models\Outgoing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutgoingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Outgoing = [
            [
                'incoming_id' => 1,
                'nama' => 'kopi',
                'count' => 10

            ],
            [


                'incoming_id' => 2,
                'nama' => 'gula',
                'count' => 10
            ],
            [

                'incoming_id' => 3,
                'nama' => 'teh',
                'count' => 10
            ],
            [


                'incoming_id' => 4,
                'nama' => 'air',
                'count' => 10
            ],
        ];
        Outgoing::query()->insert($Outgoing);
    }
}
