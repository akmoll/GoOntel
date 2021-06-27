<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $fillable = [
        'nama_peminjam',
        'nrp',
        'fakultas',
        'departemen',
        'alamat_rumah',
        'alamat_sby',
        'nohp',
        'email',
        'tanggal_pinjam',
        'tanggal_kembali',
     ];
}
