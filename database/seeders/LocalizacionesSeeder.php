<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalizacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('localizaciones')->insert([
            ['localiz_nombre' => 'ZARAGOZA', 'created_at' => now(), 'updated_at' => now()],
            ['localiz_nombre' => 'TARAZONA', 'created_at' => now(), 'updated_at' => now()],
            ['localiz_nombre' => 'EJEA', 'created_at' => now(), 'updated_at' => now()],
            ['localiz_nombre' => 'HUESCA', 'created_at' => now(), 'updated_at' => now()],
            ['localiz_nombre' => 'TERUEL', 'created_at' => now(), 'updated_at' => now()],
            ['localiz_nombre' => 'GRAÑEN', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
