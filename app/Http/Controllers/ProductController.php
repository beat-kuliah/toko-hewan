<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Payment;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $terkait = Product::where('jenis', $product->jenis)
        ->where('id', '!=', $id)->limit(5)->get();
        $payment = Payment::all();

        return view('product', [
            'product' => $product,
            'terkait' => $terkait,
            'payment' => $payment,
        ]);
    }
}
