<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayrrolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('payrolls')->insert([
            [
                "year" => 2024,
                "month" => 1,
                "school_id" => 1,
            ],
            [
                "year" => 2024,
                "month" => 2,
                "school_id" => 1,
            ],
        ]);
    }
}
