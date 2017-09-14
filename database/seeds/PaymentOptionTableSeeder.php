<?php

use Illuminate\Database\Seeder;

class PaymentOptionTableSeeder extends Seeder {
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('paymentOption')->insert([
            'description' => 'PayPal',
            'code' => 'PPL',
        ]);
    }
}
