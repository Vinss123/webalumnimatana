<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    use HasFactory;

    protected $table = 'job_vacancies';

    protected $fillable = [
        'judul',
        'perusahaan',
        'tipe_pekerjaan',
        'lokasi',
        'deskripsi',
        'persyaratan',
        'gaji_min',
        'gaji_max',
        'kontak_email',
        'kontak_phone',
        'status',
        'rejection_note',
        'posted_by',
        'approved_by',
        'approved_at'
    ];

    protected $casts = [
        'gaji_min' => 'decimal:2',
        'gaji_max' => 'decimal:2',
        'approved_at' => 'datetime',
    ];

    // ========================================
    // RELATIONSHIPS
    // ========================================
    
    public function postedBy()
    {
        return $this->belongsTo(User::class, 'posted_by');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    // ========================================
    // SCOPES (Query Helpers)
    // ========================================
    
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    // ========================================
    // ACCESSORS (Computed Properties)
    // ========================================
    
    /**
     * Format gaji dengan rupiah
     * Usage: $job->formatted_gaji
     */
    public function getFormattedGajiAttribute()
    {
        if ($this->gaji_min && $this->gaji_max) {
            return 'Rp ' . number_format($this->gaji_min, 0, ',', '.') . 
                   ' - Rp ' . number_format($this->gaji_max, 0, ',', '.');
        }
        
        if ($this->gaji_min && !$this->gaji_max) {
            return 'Mulai dari Rp ' . number_format($this->gaji_min, 0, ',', '.');
        }
        
        if (!$this->gaji_min && $this->gaji_max) {
            return 'Hingga Rp ' . number_format($this->gaji_max, 0, ',', '.');
        }
        
        return 'Negosiable';
    }

    /**
     * Waktu relatif sejak posting
     * Usage: $job->time_ago
     */
    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    /**
     * Badge HTML untuk status
     * Usage: {!! $job->status_badge !!}
     */
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'pending' => '<span class="badge bg-warning text-dark">⏳ Pending</span>',
            'approved' => '<span class="badge bg-success">✅ Disetujui</span>',
            'rejected' => '<span class="badge bg-danger">❌ Ditolak</span>',
        ];

        return $badges[$this->status] ?? '<span class="badge bg-secondary">Unknown</span>';
    }

    /**
     * Format tipe pekerjaan yang lebih readable
     * Usage: $job->tipe_pekerjaan_label
     */
    public function getTipePekerjaanLabelAttribute()
    {
        $labels = [
            'full_time' => 'Full Time',
            'part_time' => 'Part Time',
            'internship' => 'Internship',
            'contract' => 'Contract',
            'freelance' => 'Freelance',
        ];

        return $labels[$this->tipe_pekerjaan] ?? ucfirst(str_replace('_', ' ', $this->tipe_pekerjaan));
    }

    /**
     * Check apakah user adalah pemilik loker ini
     * Usage: $job->isOwnedBy($user)
     */
    public function isOwnedBy($user)
    {
        return $this->posted_by === $user->id;
    }

    /**
     * Check apakah loker bisa diedit
     * Usage: $job->canBeEditedBy($user)
     */
    public function canBeEditedBy($user)
    {
        // Admin/Teacher bisa edit semua
        if (in_array($user->role, ['admin', 'teacher'])) {
            return true;
        }

        // Alumni hanya bisa edit loker sendiri
        return $this->isOwnedBy($user);
    }

    /**
     * Check apakah loker bisa dihapus
     * Usage: $job->canBeDeletedBy($user)
     */
    public function canBeDeletedBy($user)
    {
        // Admin/Teacher bisa delete semua
        if (in_array($user->role, ['admin', 'teacher'])) {
            return true;
        }

        // Alumni hanya bisa delete loker sendiri
        return $this->isOwnedBy($user);
    }
}