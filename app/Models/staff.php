<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $fillable = [
        'foto',
        'nama',
        'divisi',
        'ttl',
        'jeniskelamin',
        'telp'
    ];
}
