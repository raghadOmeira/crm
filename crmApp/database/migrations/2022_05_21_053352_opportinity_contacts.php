<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpportinityContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportinity_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('note')->nullable();
            $table->bigInteger('contacts_id');
            $table->bigInteger('op_id')->unsigned();
            $table->foreign('op_id')->references('id')->on('opportunities')->onDelete('cascade');
            
        });      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opportinity_contacts');

    }
}
