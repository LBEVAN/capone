<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(CategoryTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductStockTableSeeder::class);
        $this->call(DiscountTableSeeder::class);
    }
}
