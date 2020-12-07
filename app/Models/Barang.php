<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $fillable = ['nama_barang', 'spesifikasi', 'jumlah', 'baik', 'rusak_ringan', 'rusak_berat', 'keterangan', 'id_ruang'];
}
