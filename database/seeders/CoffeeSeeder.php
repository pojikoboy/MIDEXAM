<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coffees')->insert([
            'name' => 'Caramel Macchiato',
            'price' => 35000,
            'image' => 'assets/images/macchiato.jpg',
        ]);

        DB::table('coffees')->insert([
            'name' => 'Java Chip Frappuccino',
            'price' => 25000,
            'image' => 'assets/images/java.jpg',
        ]);

        DB::table('coffees')->insert([
            'name' => 'Vanilla Sweet Cream',
            'price' => 45000,
            'image' => 'assets/images/vanilla.jpg',
        ]);
    }
}
