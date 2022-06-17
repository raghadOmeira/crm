<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpportinityContactsRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('opportinity_contacts_roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name')->nullable();
            $table->bigInteger('op_con_id')->unsigned();
            $table->foreign('op_con_id')->references('id')->on('opportinity_contacts_roles')->onDelete('cascade');
            
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opportinity_contacts_roles');

    }
}
