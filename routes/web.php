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

Route::get('/', function () {
	$articles=DB::select('select * from  artisans');
    return view('welcome',['articles'=>$articles]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/article','Articlecontroller@index');