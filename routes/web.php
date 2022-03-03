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



route::get('xin-chao/{caovanha}' , function($ten){
    return 'xin chao ban' . $ten;
});
route::get('xin-chaoo/{chengu}/{namsinh?}/{quequan?}' , function($ten, $namsinh='1988', $quequan='Huế'){
    return 'Xin chào bạn:' .$ten .'<br>Năm sinh :' . $namsinh  . '<br>Quê quán :' .$quequan;
})->where(['ten' => '[a-z]+' , 'namsinh' => '[0-9]+' , 'quequan' => '[a-z]+' ]);
