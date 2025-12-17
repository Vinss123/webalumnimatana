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
       Schema::create('tracer_studies', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('alumni_id');
    $table->date('survey_date');

    $table->enum('status', [
        'bekerja_full_time','bekerja_part_time','wiraswasta',
        'lanjut_pendidikan','tidak_kerja_sedang_cari','belum_memungkinkan_kerja'
    ])->nullable();

    $table->string('current_company')->nullable();
    $table->string('current_position')->nullable();

    $table->enum('funding_source', [
        'biaya_sendiri','beasiswa_adik','beasiswa_bidikmisi',
        'beasiswa_ppa','beasiswa_afirmasi','beasiswa_swasta','lainnya'
    ])->nullable();

    $table->tinyInteger('f21_perkuliahan')->nullable();
    $table->tinyInteger('f22_demonstrasi')->nullable();
    $table->tinyInteger('f23_riset_project')->nullable();
    $table->tinyInteger('f24_magang')->nullable();
    $table->tinyInteger('f25_praktikum')->nullable();
    $table->tinyInteger('f26_kerja_lapangan')->nullable();
    $table->tinyInteger('f27_diskusi')->nullable();

    $table->foreign('alumni_id')->references('user_id')->on('alumni')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracer_studies');
    }
};
