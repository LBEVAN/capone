<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->integer('countryId')->unsigned();
            $table->string('postcode');
            $table->integer('shippingOptionId')->unsigned();
            $table->integer('paymentOptionId')->unsigned();
            $table->integer('discountId')->unsigned();
            $table->timestamps();

            $table->foreign('countryId')->references('id')->on('country');
            $table->foreign('shippingOptionId')->references('id')->on('shippingOption');
            $table->foreign('paymentOptionId')->references('id')->on('paymentOption');
            $table->foreign('discountId')->references('id')->on('discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('orders');
    }
}
