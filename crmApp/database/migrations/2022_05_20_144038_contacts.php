<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('description');
            $table->string('phone_number');
            $table->integer('call_num')->nullable();
            $table->integer('email_num')->nullable();
            $table->string('department')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->bigInteger('leads_id')->unsigned();
            $table->foreign('leads_id')->references('id')->on('leads')->onDelete('cascade');

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
