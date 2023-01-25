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
        'id',
        'name',
        'email',
        'hp',
        'password',
        'role_id',
        'foto_ktp',
        'pas_foto',
        'no_ktp',
        'kejuruan',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tgl_lahir',
        'provinsi_id',
        'kota_id',
        'alamat',
        'pendidikan_terakhir',
        'asal_sekolah',
        'status_pernikahan',
        'pekerjaan_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
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
}
