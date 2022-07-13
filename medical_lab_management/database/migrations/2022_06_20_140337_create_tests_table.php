<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('notes');
            $table->string('normal_range');
            $table->string('test_name');
            $table->string('test_result');
            $table->timestamps();
            $table->unsignedBigInteger('medical_id');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('medical_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
