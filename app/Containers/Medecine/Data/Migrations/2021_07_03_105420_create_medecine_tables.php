<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedecineTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('medecines', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('medecines');
    }
}
