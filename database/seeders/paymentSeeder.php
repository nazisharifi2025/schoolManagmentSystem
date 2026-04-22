<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('payments')->insert([
            [
                "payment_amount" => 15000,
                "employee_id" => 1,
                "payroll_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "payment_amount" => 20000,
                "employee_id" => 2,
                "payroll_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
