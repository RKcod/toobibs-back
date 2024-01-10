<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCentertypeTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('centertypes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->text('description');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('centertypes');
    }
}
