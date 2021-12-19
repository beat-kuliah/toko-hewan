<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = [
        'jumlah',
        'userId',
        'productId'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'productId');
    }
}
