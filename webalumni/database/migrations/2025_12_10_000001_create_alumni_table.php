<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('alumni')) {
       Schema::create('alumni', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->string('nim');
    $table->string('graduation_year');
    $table->string('major');

    $table->string('current_job')->nullable();
    $table->string('company_name')->nullable();
    $table->string('job_position')->nullable();
    $table->string('salary_range')->nullable();
    $table->string('linkedin_profile')->nullable();

    $table->timestamp('created_at')->nullable();
    $table->timestamp('updated_at')->nullable();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});

        }
    }

    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
