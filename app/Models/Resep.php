<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    // Menonaktifkan timestamp otomatis
    public $timestamps = false;

    protected $table = 'resep'; // Pastikan nama tabel sesuai

    protected $fillable = [
        'gambar',
        'keterangan',
        'user_id',
    ];
}

