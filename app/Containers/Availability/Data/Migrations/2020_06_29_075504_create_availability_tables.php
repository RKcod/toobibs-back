<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvailabilityTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {

            $table->increments('id');
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->text('description');
            $table->integer('users_id');
            $table->integer('status');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('availabilities');
    }
}
