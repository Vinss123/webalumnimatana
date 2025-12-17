<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    
    // TAMBAHKAN INI: Karena nama tabel di database adalah 'alumni' (tunggal)
    protected $table = 'alumni';
    
    protected $fillable = [
        'user_id',
        'nim',
        'graduation_year',
        'major',
        'current_job',
        'company_name',
        'job_position',
        'salary_range',
        'linkedin_profile', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}