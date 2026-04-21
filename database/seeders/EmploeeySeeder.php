<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmploeeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emploees')->insert([
            [
                "firstName"=> "Ali Ahmad",
                "lastName"=> "Ahmadi",
                "tazkira"=> "091323",
                "email"=> "AliAhmad@gmail.com",
                "phone"=> "0798764532"
            ]
        ]);
    }
}
