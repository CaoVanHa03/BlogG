<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/xin-chao', function () {
    return view('xin chào');
});

route::get('xin-chao/{caovanha}' , function($ten){
    return 'xin chaof banj' . $ten;
});
route::get('chao/{caovanha}/{namsinh}' , function($ten, $namsinh){
    return 'xin chaof banj' . $ten . '<br>Cos nam sinh la: ' . $namsinh;
});