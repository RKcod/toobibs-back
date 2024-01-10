<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionmedecineTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prescriptionmedecines', function (Blueprint $table) {

            $table->increments('id');
            $table->integer( 'prescription_id');
            $table->integer('medicine_id');
            $table->string('duration');
            $table->date( 'date_first_taken');
            $table->integer('quantity');
            $table->integer('frequency');
            $table->string('time_of_intake');
            $table->date('renewal_date');
            $table->text('other_precisions');



            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('prescriptionmedecines');
    }
}
