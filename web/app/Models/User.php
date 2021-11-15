<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username', //baru
        'level', //baru'
        'email',
        'email_verified_at',
        'password',
        'forget_password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function perusahaan()
    {
        return $this->hasOne(Perusahaan::class, 'id_user');
    }

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'id_user');
    }
    public function jawabanresponden()
    {
        return $this->hasOne(Jawabanresponden::class, 'id_user');
    }
}
