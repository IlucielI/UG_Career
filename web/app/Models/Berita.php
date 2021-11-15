<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'jenis_berita',
        'judul_berita',
        'preview_berita',
        'isi_berita',
        'foto'
    ];
    
}
