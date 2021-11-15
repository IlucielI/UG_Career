<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanJawabanCabang extends Model
{
    use HasFactory;
    protected $table = "pilihanjawabancabangs";
    protected $fillable = [
        'jawaban',
        'id_pertanyaancabang',
        'kd_jawaban',
    ];

    public function pertanyaancabang()
    {
        return $this->belongsTo(PertanyaanCabang::class, 'id_pertanyaancabang');
    }
}
