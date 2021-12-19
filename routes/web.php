<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', function(){
    return redirect('/');
});
Route::get('/', 'HomeController@index');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/pesan', function () {
        return view('pesan');
    });
    Route::get('/notifikasi', function () {
        return view('notifikasi');
    });

    Route::get('/keranjang', 'KeranjangController@index');

    Route::get('/product/{id}', 'ProductController@index');

    Route::get('/cart/{id}', 'KeranjangController@index');

    Route::post('/order', 'PesananController@store');
    Route::get('/order/status/{order}/{id}', 'PesananController@update');
    Route::get('/pesanan', 'PesananController@index');
});
