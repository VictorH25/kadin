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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_customer');
            $table->integer('id_user');
            $table->boolean('delivery')->default(false);
            $table->boolean('open')->default(true);
            $table->boolean('form_of_payment')->default(true);
            $table->boolean('delivered')->default(false);
            $table->string('amount');
            $table->integer('key');            
            $table->integer('desk');            
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
        Schema::dropIfExists('orders');
    }
};
