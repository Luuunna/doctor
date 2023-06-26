<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name_of_patient');
            $table->string('emergency_number_of_the_patient');
            $table->string('info_of_patient');
            $table->string('descripcion');
            $table->string('recipe');
            $table->string('patient_conditions');
            $table->string('patient_addmission_date');
            $table->string('patient_discharge_date');
            $table->integer('id_services')->unsigned();
            $table->foreign('id_services')->references('id')->
            on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_patients')->unsigned();
            $table->foreign('id_patients')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('historials');
    }
}
