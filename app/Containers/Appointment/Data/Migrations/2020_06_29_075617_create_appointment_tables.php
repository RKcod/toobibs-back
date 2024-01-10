<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('users_id');
            $table->integer('doctor_id');
            $table->string('date');
            $table->string('time');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->integer('status');
            $table->integer('alert');
            $table->integer('alert_today');
            $table->boolean('is_me');
            $table->boolean('teleconsult');
            $table->text('motif');
            $table->text('type');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('appointments');
    }
}
