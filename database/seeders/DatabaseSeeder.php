<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CoffeeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Vico Lamar',
            'email' => 'vicolamar@example.com',
            'level' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Fei Fei Li',
            'email' => 'feifeili@example.com',
            'level' => 0,
        ]);

       

        $this->call([
            CoffeeSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
