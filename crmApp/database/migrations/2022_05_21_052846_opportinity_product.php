<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpportinityProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportinity_product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->bigInteger('quantity');
            $table->string('note');
            $table->date('date');
            $table->bigInteger('op_id')->unsigned();
            $table->foreign('op_id')->references('id')->on('opportunities')->onDelete('cascade');
            
        });     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opportinity_product');

    }
}
