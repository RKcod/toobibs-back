<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsermetaTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_metas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('type');
            $table->string('start_year');
            $table->string('end_year');
            $table->string('title');
            $table->text('description');
            $table->string('at');
            $table->integer('doctor_id');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('user_metas');
    }
}
