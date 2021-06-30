<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formpinjams extends Model
{
    protected $fillable = [
        'idform',
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
        'status',
     ];
}
