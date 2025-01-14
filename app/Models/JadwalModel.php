<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    use HasFactory;

    public $table = 'jadwal';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'ruangan',
        'tgl_mulai',
        'tgl_selesai'
    ];
}
