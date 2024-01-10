<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {

            $table->increments('id');
            $table->int('doctor_id');
            $table->text('message');
            $table->string('type');
            $table->string('title');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('sms');
    }
}
