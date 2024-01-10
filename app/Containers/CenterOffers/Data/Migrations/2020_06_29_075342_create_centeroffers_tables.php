<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCenteroffersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('centeroffers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->integer('center_id');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('centeroffers');
    }
}
