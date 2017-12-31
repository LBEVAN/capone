<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('size')->insert([
            'description' => 'Small',
            'code' => 'S',
        ]);

        DB::table('size')->insert([
            'description' => 'Medium',
            'code' => 'M',
        ]);

        DB::table('size')->insert([
            'description' => 'Large',
            'code' => 'L',
        ]);

        DB::table('size')->insert([
            'description' => 'X-Large',
            'code' => 'XL',
        ]);

        DB::table('size')->insert([
            'description' => 'One Size',
            'code' => 'ONE',
        ]);
    }
}
