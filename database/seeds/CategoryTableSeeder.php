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
    }
}
