<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawabanresponden extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_responden',
        // 'kelas_pertanyaan',
        'id_user',
        'pertanyaan',
    ];
    public function jawabanrespondendetail()
    {
    	return $this->hasMany(Jawabanrespondendetail::class, 'id_jawabanresponden');
    }
    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }
}
