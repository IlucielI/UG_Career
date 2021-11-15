<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'alamat',
        'no_telp',
        'url_web',
        'nama_cp',
        'email_cp',
        'jabatan',
        'id_user',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }
}
