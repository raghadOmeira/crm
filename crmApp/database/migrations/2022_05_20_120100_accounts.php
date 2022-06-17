<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('ac_name')->unique();
            $table->string('ac_type');
            $table->string('description');
            $table->string('phone_number');
            $table->decimal('annual_revenue', 14, 0)->nullable();
            $table->integer('num_of_employees')->unsigned()->nullable();
            $table->string('website');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');

    }
}
