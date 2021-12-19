<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Order;
use App\Product;
use Auth;

class PesananController extends Controller
{
    public function index(){
        if(Auth::user()->role == 0)
            $order = Order::all();
        else
            $order = Order::where('userId', Auth::user()->id)->get();

        return view('pesanan', [
            'order' => $order,
        ]);
    }

    public function update($order, $id){
        $order = Order::find($order);

        $order->status = $id;
        $order->save();

        return redirect('/pesanan');
    }

    public function store(Request $req){
        $now = Carbon::now()->format('YmdHis');
        $noPesanan = $now + $req->userId;
        $product = Product::find($req->product);
        $harga = $product->harga * $req->jumlah;

        $order = new Order;
        $order->noPesanan = $noPesanan;
        $order->userId = $req->userId;
        $order->productId = $req->product;
        $order->jumlah = $req->jumlah;
        $order->alamat = $req->alamat;
        $order->pengiriman = 1;
        $order->pembayaranId = $req->payment;
        $order->status = 1;
        $order->harga = $harga;
        $order->save();
        
        $terjual = $product->terjual + $req->jumlah;
        
        $product->terjual = $terjual;
        $product->save();
        
        $result = [
            'noPesanan' => $noPesanan,
            'response' => 'success'
        ];

        return $result;
    }
}
