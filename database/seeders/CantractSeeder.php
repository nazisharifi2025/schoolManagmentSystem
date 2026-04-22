<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CantractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('Cantract')->insert([
            [
                'designation_id' => 1,
                'employee_id' => 1,
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
            ],
            [
                'designation_id' => 2,
                'employee_id' => 2,
                'start_date' => '2024-02-01',
                'end_date' => '2025-02-01',
            ],
        ]);
    }
}
