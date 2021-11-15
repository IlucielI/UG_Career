<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanJawaban extends Model
{
    use HasFactory;
    protected $table = "pilihanjawabans";
    protected $fillable = [
        'pilihan_pertanyaan',
        'id_pertanyaan',
        'kd_jawaban',
    ];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}
