<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'nama',
        'image',
        'harga',
        'jenis',
        'kualitas',
        'description',
        'rating',
        'alamat',
        'terjual',
        'personel',
        'type'
    ];

    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function Order()
    {
        return $this->hasMany(Order::class);
    }

    public function Jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis');
    }

    public function Kualitas()
    {
        return $this->belongsTo(Kualitas::class, 'kualitas');
    }
}
