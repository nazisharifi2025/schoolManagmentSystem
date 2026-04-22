<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class designationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("designation")->insert([
             [
                'name' => 'Manager',
                'department_id' => 1,
            ],
            [
                'name' => 'Assistant Manager',
                'department_id' => 1,
            ],
            [
                'name' => 'HR Officer',
                'department_id' => 2,
            ],
            [
                'name' => 'Accountant',
                'department_id' => 3,
            ],
            [
                'name' => 'Software Engineer',
                'department_id' => 4,
            ],
        ]);
    }
}
