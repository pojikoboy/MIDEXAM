<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            'user_id' => 1,
            'coffee_id' => 1,
            'created_at' => Carbon::createFromDate(2023, 3, 19, 'GMT+7')
        ]);

        DB::table('transactions')->insert([
            'user_id' => 1,
            'coffee_id' => 1,
            'created_at' => Carbon::createFromDate(2023, 3, 20, 'GMT+7')
        ]);

        DB::table('transactions')->insert([
            'user_id' => 1,
            'coffee_id' => 1,
            'created_at' => Carbon::createFromDate(2023, 3, 21, 'GMT+7')
        ]);

        DB::table('transactions')->insert([
            'user_id' => 2,
            'coffee_id' => 1,
            'created_at' => Carbon::createFromDate(2023, 3, 18, 'GMT+7')
        ]);

        DB::table('transactions')->insert([
            'user_id' => 2,
            'coffee_id' => 1,
            'created_at' => Carbon::createFromDate(2023, 3, 19, 'GMT+7')
        ]);

        DB::table('transactions')->insert([
            'user_id' => 2,
            'coffee_id' => 1,
            'created_at' => Carbon::createFromDate(2023, 3, 21, 'GMT+7')
        ]);
    }
}
