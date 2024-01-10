<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialityTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('specialities');
    }
}
