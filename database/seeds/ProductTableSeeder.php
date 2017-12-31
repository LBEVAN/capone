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
            'name' => 'Longline Tee - Khaki',
            'description' => 'Quality material, Modern fit',
            'price' => 20.00,
            'categoryId' => 1,
            'imagePath' => 'images/items/caponeLonglineKhaki.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Pink Suede Cap',
            'description' => 'Suede Cap with adjustable plastic strap at the rear.',
            'price' => 10.00,
            'categoryId' => 5,
            'imagePath' => 'images/items/pinkSuedeHat2.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Grey Suede Cap',
            'description' => 'Suede Cap with adjustable plastic strap at the rear',
            'price' => 10.00,
            'categoryId' => 5,
            'imagePath' => 'images/items/greySuedeHat.png',
        ]);

    }
}
