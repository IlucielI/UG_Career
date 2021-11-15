<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'npm',
        'tahun_masuk',
        'tahun_lulus',
        'nik',
        'no_telp',
        'id_prodi',
        'id_user',
    ];
    
    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }

    public function prodi()
    {
    	return $this->belongsTo(Prodi::class, 'id_prodi');
    }
}
