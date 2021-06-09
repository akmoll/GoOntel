<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    protected $fillable = [
        'merk',
        'jenissepeda',
        'warna',
        'status',
     ];

 }
