<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'noPesanan',
        'userId',
        'productId',
        'jumlah',
        'alamat',
        'pengiriman',
        'pembayaranId',
        'status'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'productId');
    }

    public function Payment()
    {
        return $this->belongsTo(Payment::class, 'pembayaranId');
    }
}
