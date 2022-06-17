<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Opportunities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('op_name');
            $table->string('amount');
            $table->string('close_date');
            $table->string('expected_revenue');
            $table->string('probability');
            $table->string('competitors');
            $table->string('description');
            $table->bigInteger('contacts_id')->unsigned();
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('cascade');
        });     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opportunities');
    }
}
