<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hewan = Product::where('type', 1)->get();
        $tempat = Product::where('type', 2)->get();

        return view('home', [
            'hewan' => $hewan,
            'tempat' => $tempat
        ]);
    }
}
