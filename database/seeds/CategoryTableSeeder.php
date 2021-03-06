<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('category')->insert([
            'description' => 'Hoodie',
            'code' => 'HOOD',
        ]);

        DB::table('category')->insert([
            'description' => 'T-Shirt',
            'code' => 'TSHR',
        ]);

        DB::table('category')->insert([
            'description' => 'Joggers',
            'code' => 'JOGG',
        ]);

        DB::table('category')->insert([
            'description' => 'Vests',
            'code' => 'VEST',
        ]);

        DB::table('category')->insert([
            'description' => 'Hats',
            'code' => 'HATS',
        ]);
    }
}
