<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanCabang extends Model
{
    use HasFactory;
    protected $table = "pertanyaancabangs";
    protected $fillable = [
        'kd_cabang',
        'pertanyaan_cabang',
        'id_pertanyaan',
    ];

    public function pertanyaan()
    {
    	return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}
