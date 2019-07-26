<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('categories')->exists()) {
            DB::table('categories')->insert([
                'name' => 'Blend'
            ]);
            DB::table('categories')->insert([
                'name' => 'Presencial'
            ]);
        }
    }
}
