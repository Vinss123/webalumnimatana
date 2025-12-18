<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
    $table->unsignedBigInteger('user_id')->primary();
    $table->string('nim')->unique();
    $table->string('major', 100);
    $table->string('phone', 20)->default('');
    $table->integer('semester');
    $table->string('address')->default('');
    $table->timestamp('created_at')->nullable();
    $table->timestamp('updated_at')->nullable();

    $table->unsignedBigInteger('study_program_id')->nullable();
    $table->integer('entry_year')->nullable();
    $table->integer('current_semester')->nullable();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('study_program_id')->references('id')->on('study_programs')->onDelete('set null');
});

        }
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
