<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('operator_name');
            $table->string('client_name');
            $table->string('purchase_date');
            $table->string('purchase_time');
            $table->string('password');
            $table->string('sum');
            $table->string('percentage');
            $table->string('amount');
            $table->string('value_payment');
            $table->string('change');
            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->string('delivery');
            $table->integer('type');
            $table->string('trip');
            $table->string('key');
            $table->string('desk');
            $table->string('logo');
            $table->string('footer');
            $table->string('title');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
