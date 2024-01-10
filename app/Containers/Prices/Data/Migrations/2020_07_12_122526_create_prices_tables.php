<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {

            $table->increments('id');
            $table->string('price_cabinet_consultation');
            $table->string('price_teleconsultation');
            $table->string('price_house_consultation');
            $table->string('currency');
            $table->string('fees');
            $table->string('fees_type');
            $table->string('profile_type');
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
        Schema::drop('prices');
    }
}
