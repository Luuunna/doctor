<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('identification_card');
            $table->string('phone_number');
            $table->date('birthdate');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('email');
            $table->string('hospital_taht_attends');
            $table->string('workstation');
            $table->string('specialty');
            $table->string('turn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
