<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('product')->insert([
            'name' => 'Capone Clothing Hoodie - Pink',
            'description' => '80% Cotton, 20% Polyester, Ribbed Cuffs and Hem, Twin Needle Stitching',
            'price' => 20.00,
            'categoryId' => 1,
            'imagePath' => 'images/items/babyPinkHoodie1.png',
        ]);
    }
}
