<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAlumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'npm',
        'tahun_masuk',
        'tahun_lulus',
        'nik',
        'no_telp',
    ];
    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }
}
