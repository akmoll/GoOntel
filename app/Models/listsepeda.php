<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listsepeda extends Model
{
    protected $fillable = [
        'kode_sepeda',
        'merk_sepeda',
        'status_sepeda',
        'jenis_sepeda',
        'idpetugas',
        'kualitas_sepeda',
        'harga_sepeda',
     ];

 }
