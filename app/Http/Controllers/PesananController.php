<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function store(Request $req){
        $result = [
            $req->userId,
            $req->product,
            $req->jumlah
        ];

        return $result;
    }
}
