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
        Schema::create('order_product_additionals', function (Blueprint $table) {
            $table->id();
            $table->integer('order_product_id');
            $table->unsignedBigInteger('additional_id');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('additional_id')->references('id')->on('additionals')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product_additionals');
    }
};
