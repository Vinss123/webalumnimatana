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
       Schema::create('lecturers', function (Blueprint $table) {
    $table->unsignedBigInteger('user_id')->primary();
    $table->string('nidn')->nullable()->unique();
    $table->unsignedBigInteger('department_id')->nullable();
    $table->string('expertise')->nullable();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('department_id')->references('id')->on('study_programs')->onDelete('set null');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
