<?php

use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discount')->insert([
            'discountCode' => 'SNFM10',
            'discountPercentage' => 10.00,
        ]);

        DB::table('discount')->insert([
            'discountCode' => 'lpreece10',
            'discountPercentage' => 10.00,
        ]);

        DB::table('discount')->insert([
            'discountCode' => 'BOXING20',
            'discountPercentage' => 20.00,
        ]);

    }
}
