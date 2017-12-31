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
            'icon' => 'fa fa-cc-paypal fa-2x'
        ]);

        DB::table('paymentOption')->insert([
            'description' => 'Debit or Credit Card',
            'code' => 'DCC',
            'icon' => 'glyphicon glyphicon-credit-card fa-2x'
        ]);
    }
}
