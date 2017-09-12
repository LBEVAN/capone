<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('product')->insert([
            'name' => 'Hoodie - Pink',
            'description' => '80% Cotton, 20% Polyester, Ribbed Cuffs and Hem, Twin Needle Stitching',
            'price' => 20.00,
            'categoryId' => 1,
            'imagePath' => 'images/items/pinkHoodie1.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Hoodie - Grey',
            'description' => '80% Cotton, 20% Polyester, Ribbed Cuffs and Hem, Twin Needle Stitching',
            'price' => 20.00,
            'categoryId' => 1,
            'imagePath' => 'images/items/greyHoodie1.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Hoodie - Tanned',
            'description' => '80% Cotton, 20% Polyester, Ribbed Cuffs and Hem, Twin Needle Stitching',
            'price' => 20.00,
            'categoryId' => 1,
            'imagePath' => 'images/items/tannedHoodie2.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Fitted Tee - Blue',
            'description' => '100% Ringspun Semi-Combed Cotton, Tapered Fit, Ribbed Collar, Twin Needle Stitching',
            'price' => 15.00,
            'categoryId' => 2,
            'imagePath' => 'images/items/blueTee1.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Fitted Tee - Black',
            'description' => '100% Ringspun Semi-Combed Cotton, Tapered Fit, Ribbed Collar, Twin Needle Stitching',
            'price' => 15.00,
            'categoryId' => 2,
            'imagePath' => 'images/items/comingSoon.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Fitted Tee - White',
            'description' => '100% Ringspun Semi-Combed Cotton, Tapered Fit, Ribbed Collar, Twin Needle Stitching',
            'price' => 15.00,
            'categoryId' => 2,
            'imagePath' => 'images/items/comingSoon.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Joggers - Grey',
            'description' => '80% Cotton, 20% Polyester, Modern Slim Fit, Soft Cotton Faced Fabric',
            'price' => 20.00,
            'categoryId' => 3,
            'imagePath' => 'images/items/greyJoggers.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Joggers - Black',
            'description' => '80% Cotton, 20% Polyester, Modern Slim Fit, Soft Cotton Faced Fabric',
            'price' => 20.00,
            'categoryId' => 3,
            'imagePath' => 'images/items/comingSoon.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Joggers - Grey Camo',
            'description' => '35% Cotton, 65% Polyester, Slim Fit, Camo Stripe On Each Leg',
            'price' => 22.00,
            'categoryId' => 3,
            'imagePath' => 'images/items/greyCamoJoggers.png',
        ]);

        DB::table('product')->insert([
            'name' => 'Longline Raglan - Light Grey',
            'description' => '100% Cotton, Dual coloured short sleeves',
            'price' => 20.00,
            'categoryId' => 2,
            'imagePath' => 'images/items/longLineRaglan2.png',
        ]);
    }
}
