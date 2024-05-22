<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendance_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attendances_id');
            $table->unsignedBigInteger('student_id');
            $table->string('asistencia');
            $table->string('observaciones')->nullable();
            $table->timestamps();


            $table->foreign('attendances_id')->references('id')->on('attendances')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendance_student');
    }
};
