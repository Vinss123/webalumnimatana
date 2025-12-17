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
       Schema::create('education_history', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->string('institution_name')->nullable();
    $table->string('degree')->nullable();
    $table->string('field_of_study')->nullable();
    $table->integer('start_year')->nullable();
    $table->integer('end_year')->nullable();
    $table->text('description')->nullable();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_history');
    }
};
