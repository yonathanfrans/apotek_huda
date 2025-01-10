<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag',
        'tanggal',
        'jumlah',
        'alamat',
        'status',
        'total',
        'discount_id',
        'user_id',
        'product_id'
    ];

    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class, 'id', 'discount_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            // Format tanggal: YYYYMMDD
            $currentDate = Carbon::now()->format('Ymd');
            
            // Hitung berapa banyak pesanan yang dibuat hari ini
            $orderCountToday = self::whereDate('created_at', Carbon::today())->count() + 1;

            // Buat tag dengan format #YYYYMMDD-XXX
            $order->tag = '#' . $currentDate . str_pad($orderCountToday, 3, '0', STR_PAD_LEFT);
        });
    }
}
