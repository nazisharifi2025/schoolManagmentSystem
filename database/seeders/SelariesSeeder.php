<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('salaries')->insert([
            [
                "gross_salary" => 30000,
                "employee_id" => 1,
                "payroll_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "gross_salary" => 45000,
                "employee_id" => 2,
                "payroll_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
