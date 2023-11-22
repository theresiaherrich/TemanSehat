<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'kelas',
        'telp',
        'penyakit',
        'tanggal',
        'pukul',
        'status',
        'approval'
    ];

public function siswa()
{
    return $this->belongsTo(User::class);
}
}
