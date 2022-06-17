<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Activities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('act_name');
            $table->string('act_type');
            $table->string('description');
            $table->string('status');
            $table->string('priority');
            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->bigInteger('contacts_id')->unsigned();
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->bigInteger('leads_id')->unsigned();
            $table->foreign('leads_id')->references('id')->on('leads')->onDelete('cascade');

        });     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }
}
