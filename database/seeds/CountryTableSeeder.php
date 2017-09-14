<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder {
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('country')->insert([
            'description' => 'United Kingdom',
            'code' => 'UK',
        ]);
    }
}
