<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('job_vacancies', function (Blueprint $table) {
        $table->id();
        
        // Sesuaikan dengan Model (posted_by)
        $table->foreignId('posted_by')->constrained('users')->cascadeOnDelete();
        $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();

        // Nama kolom harus sama dengan yang ada di Model $fillable
        $table->string('judul');
        $table->string('perusahaan');
        $table->string('tipe_pekerjaan'); // full_time, part_time, dll
        $table->string('lokasi');
        $table->text('deskripsi');
        $table->text('persyaratan')->nullable();
        
        $table->decimal('gaji_min', 15, 2)->nullable();
        $table->decimal('gaji_max', 15, 2)->nullable();
        
        $table->string('kontak_email')->nullable();
        $table->string('kontak_phone')->nullable();

        // INI YANG MENYEBABKAN ERROR TADI (Kolom Status)
        $table->string('status')->default('pending'); // pending, approved, rejected
        $table->text('rejection_note')->nullable();
        
        $table->timestamp('approved_at')->nullable();
        $table->timestamps(); 
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
