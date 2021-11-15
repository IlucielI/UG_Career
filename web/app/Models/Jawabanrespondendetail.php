<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawabanrespondendetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_jawaban',
        'kd_pertanyaan',
        // 'kelas_pertanyaan',
        'jawaban',
        'id_jawabanresponden',
    ];
    public function jawabanresponden()
    {
        return $this->belongsTo(Jawabanresponden::class, 'id_jawabanresponden');
    }
}
