<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kualitas extends Model
{
    protected $table = "kualitas";

    protected $fillable = [
        'nama'
    ];

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
