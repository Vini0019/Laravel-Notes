<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('notes')->insert([
                [
                    'id' => $i,
                    'user_id' => 1,
                    'title' => 'Titulo Exemplo',
                    'text' => 'Texto Exemplo',
                    'created_at' => date('Y-m-d H:i:s')

                ]
            ]);
        }
    }
}
