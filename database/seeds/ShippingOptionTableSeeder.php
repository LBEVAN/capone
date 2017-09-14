<?php

use Illuminate\Database\Seeder;

class ShippingOptionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('shippingOption')->insert([
            'description' => 'Standard (3 - 5 working days)',
            'code' => 'STD',
            'price' => 3.50,
        ]);

        DB::table('shippingOption')->insert([
            'description' => 'Express (1 - 2 working days)',
            'code' => 'EXP',
            'price' => 6.50,
        ]);
    }
}
