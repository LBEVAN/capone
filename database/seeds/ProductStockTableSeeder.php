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
    }
}
