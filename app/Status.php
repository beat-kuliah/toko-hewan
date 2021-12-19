<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";

    protected $fillable = [
        'name'
    ];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
