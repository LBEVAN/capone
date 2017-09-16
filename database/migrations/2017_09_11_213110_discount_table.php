<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('discount', function (Blueprint $table) {
            $table->increments('id');
            $table->string('discountCode');
            $table->decimal('discountPercentage');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
        Schema::dropIfExists('discount');
    }
}
