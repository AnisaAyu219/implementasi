<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class Mahasiswa extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table='mahasiswa';
    protected $fillable = [
        'email',
        'nim',
        'password',
        'no_telp',
        'nama',
        'alamat',
    ];
}
