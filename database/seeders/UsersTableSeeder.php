<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
            [
                'username' => "user{$i}@gmail.com",
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ]
            ]);
        }
    }
}
