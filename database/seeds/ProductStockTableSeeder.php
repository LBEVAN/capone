<?php

use Illuminate\Database\Seeder;

class ProductStockTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('productStock')->insert([
            'productId' => 1,
            'sizeId' => 1,
            'quantity' => 5,
        ]);

        DB::table('productStock')->insert([
            'productId' => 1,
            'sizeId' => 2,
            'quantity' => 5,
        ]);

        DB::table('productStock')->insert([
            'productId' => 1,
            'sizeId' => 3,
            'quantity' => 5,
        ]);

        DB::table('productStock')->insert([
            'productId' => 2,
            'sizeId' => 5,
            'quantity' => 5,
        ]);

        DB::table('productStock')->insert([
            'productId' => 3,
            'sizeId' => 5,
            'quantity' => 5,
        ]);
    }
}
