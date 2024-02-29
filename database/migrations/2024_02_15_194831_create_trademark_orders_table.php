<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('trademark_orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('tr_name');
            $table->string('tr_slogan')->nullable();
            $table->string('tr_logo')->nullable();
            $table->string('industry');
            $table->string('products');
            $table->string('type_of_business');
            $table->boolean('us_based');
            $table->integer('user_id');
            $table->string('packageName');
            $table->string('serviceName');
            $table->string('packagePrice');
            $table->string('servicePrice');
            $table->string('t_Price');
            $table->string('card');
            $table->string('cardName');
            $table->integer('cardNumber');
            $table->integer('cvc');
            $table->string('expiry');
            $table->integer('zipCode');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trademark_orders');
    }
};
