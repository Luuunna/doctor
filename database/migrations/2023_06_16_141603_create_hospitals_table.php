<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type_of_services');
            $table->string('bed_number_aviable');
            $table->string('address');
            $table->string('location');
            $table->string('emergency_number');
            $table->integer('id_patients')->unsigned();
            $table->foreign('id_patients')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_doctors')->unsigned();
            $table->foreign('id_doctors')->references('id')-> 
            on('doctors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('hospitals');
    }
}
