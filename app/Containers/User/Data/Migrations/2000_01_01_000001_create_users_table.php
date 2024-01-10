<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');

      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->string('email')->unique()->nullable();
      $table->string('password')->nullable();
      $table->string('phone')->nullable();
      $table->boolean('confirmed')->default(false);
      $table->string('gender')->nullable();
      $table->string('birth')->nullable();
      $table->string('device')->nullable();
      $table->string('platform')->nullable();
      $table->boolean('is_client')->default(false);
      $table->boolean('display_home')->default(false);

      //doctors fields
      $table->string('address')->nullable();
      $table->string('lang')->nullable();
      $table->string('user_type')->nullable();
      $table->string('profile_picture')->nullable();
      $table->integer('center_id')->nullable();
      $table->string('speciality')->nullable();
      $table->string('doctor_serial_number')->nullable();
      $table->boolean('do_teleconsult')->default(false);

      $table->rememberToken();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::drop('users');
  }
}
