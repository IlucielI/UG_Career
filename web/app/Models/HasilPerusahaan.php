<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPerusahaan extends Model
{
    use HasFactory;
    protected $table = "jawabanperusahaans";
    protected $fillable = [
        'jawaban',
        'kd_pertanyaan',
        'email',
    ];
    // public function user()
    // {
    // 	return $this->belongsTo(User::class, 'id_user');
    // }
}
