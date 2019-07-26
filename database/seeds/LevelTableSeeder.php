<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('levels')->exists()) {
            DB::table('levels')->insert([
                'name' => 'Inicial'
            ]);
            DB::table('levels')->insert([
                'name' => 'Avanzado'
            ]);
        }
    }
}
