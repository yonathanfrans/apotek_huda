<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resep extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'resep'; // Pastikan nama tabel sesuai

    protected $fillable = [
        'gambar',
        'keterangan',
        'user_id',
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'user_id');
    }
}

