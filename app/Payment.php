<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'nama'
    ];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
