<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(HomepageSeeder::class);
        $this->call(IncomingSeeder::class);
        $this->call(IngredientsSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(MejaSeeder::class);
        $this->call(OrderProdcutSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OutgoingSeeder::class);
        $this->call(ProductSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
