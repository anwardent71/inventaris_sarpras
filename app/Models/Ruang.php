<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    public $fillable = ['nama_ruang', 'luas_ruang', 'no_registrasi'];
}
