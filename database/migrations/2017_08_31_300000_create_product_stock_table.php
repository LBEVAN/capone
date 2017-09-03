<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStockTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('productStock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productId')->unsigned();
            $table->integer('sizeId')->unsigned();
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('productId')->references('id')->on('product');
            $table->foreign('sizeId')->references('id')->on('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('productStock');
    }
}
