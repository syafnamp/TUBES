<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "pasiens";
    protected $primaryKey = "id";
    protected $$fillable = [
        'id', 'nama', 'alamat','status', 'tgllahir', 'jeniskelamin', 'keluhan'];
}
