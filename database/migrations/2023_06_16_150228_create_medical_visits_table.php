<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('hour');
            $table->string('location');
            $table->string('city');
            $table->integer('id_patients')->unsigned();
            $table->foreign('id_patients')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_doctors')->unsigned();
            $table->foreign('id_doctors')->references('id')-> 
            on('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_hospital')->unsigned();
            $table->foreign('id_hospital')->references('id')->
            on('hospitals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medical_visits');
    }
}
