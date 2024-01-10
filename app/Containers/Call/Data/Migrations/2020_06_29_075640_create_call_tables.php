<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_from_id');
            $table->integer('user_to_id');
            $table->integer('rdv_id');
            $table->string('duration');
            $table->integer('has_missed');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('calls');
    }
}
