<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->integer('crime_id');
            $table->string('type');
            $table->string('med_name');
            $table->string('med_description');
            $table->string('file');
            $table->string('med_doctor');
            $table->string('med_hospital');
            $table->tinyInteger('med_status');
            $table->date('med_date');
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
        Schema::dropIfExists('medical_records');
    }
}
