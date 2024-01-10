<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCenterTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('lat');
            $table->string('lng');
            $table->string('phone');
            $table->string('email');
            $table->integer('center_type_id');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('centers');
    }
}
