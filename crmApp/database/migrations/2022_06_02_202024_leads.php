<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Leads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
        $table->id();
        $table->string('first_name')->unique();
        $table->string('last_name');
        $table->string('description');
        $table->string('phone_number'); 
        $table->string('email');
        $table->string('title');
        $table->string('company');
        $table->string('website');
        $table->string('annual_revenue');
        $table->string('email_num');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leads');
    }
}
