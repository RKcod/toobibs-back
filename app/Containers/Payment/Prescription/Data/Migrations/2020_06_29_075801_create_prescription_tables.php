<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {

            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('profile');
            $table->string('reason');
            $table->string('medicine_name');
            $table->string('typeMedecine');
            $table->string('number');
            $table->string('unit');
            $table->string('dosage');
            $table->string('frequency');
            $table->string('time_of_intake');
            $table->string('first_intake_date');
            $table->string('first_intake_date2');
            $table->string('other_precisions');
            $table->integer('doctor_id');
            $table->integer('user_id');
            $table->integer('appointment_id');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('prescriptions');
    }
}
