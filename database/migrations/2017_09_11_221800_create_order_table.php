<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerInformationId')->unsigned();
            $table->integer('shippingOptionId')->unsigned();
            $table->integer('paymentOptionId')->unsigned();
            $table->timestamps();

            $table->foreign('customerInformationId')->references('id')->on('orderCustomerInformation');
            $table->foreign('shippingOptionId')->references('id')->on('shippingOption');
            $table->foreign('paymentOptionId')->references('id')->on('paymentOption');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('order');
    }
}
