<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_pertanyaan',
        'kategori_pertanyaan',
        // 'kelas_pertanyaan',
        'kd_pertanyaan',
        'pertanyaan',
    ];
    public function pilihanjawaban()
    {
    	return $this->hasMany(PilihanJawaban::class, 'id_pertanyaan');
    }

}
