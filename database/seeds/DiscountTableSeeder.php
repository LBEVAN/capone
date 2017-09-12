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
            'discountCode' => 'teamcapone',
            'discountPercentage' => 30.00,
        ]);

        DB::table('discount')->insert([
            'discountCode' => 'lwalker10',
            'discountPercentage' => 10.00,
        ]);

        DB::table('discount')->insert([
            'discountCode' => 'dglynn10',
            'discountPercentage' => 10.00,
        ]);

        DB::table('discount')->insert([
            'discountCode' => 'tlangabeer10',
            'discountPercentage' => 10.00,
        ]);

        DB::table('discount')->insert([
            'discountCode' => 'lpreece10',
            'discountPercentage' => 10.00,
        ]);
    }
}
