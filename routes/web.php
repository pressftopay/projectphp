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
Route::get('mainpage/send','emailmeplease@send');

Route::get('mainpage/review','uploadreview@index');
Route::post('mainpage/review','uploadreview@review');
Route::get('mainpage/{lang}','localization@index');
Route::get('mainpage/uploadfile','uploadFile@index');
Route::post('mainpage/uploadfile','uploadFile@uploadSubmit');
Route::get('mainpage', function(){
    return view('mainpage');
});

Route::get('/', function () {
    return view('welcome');
});
