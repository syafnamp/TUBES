<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_Pasien extends Model
{
    use softDeletes;

    protected $table = 'datapasien';
    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'status',
        'tgllahir',
        'jeniskelamin',
        'keluhan'
    ];

    protected $hidden;
}
