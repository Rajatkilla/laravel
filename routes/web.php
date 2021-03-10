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

Route::get('/Rajat', function () {
    return view('welcome');

});
Route::get('/hello', function () {
    return view('firstpage');
     
});
Route::get('/welcome', function () {
    return view('secondpage');


     
});
Route::get('/saya','App\Http\Controllers\myController@index');

    
     
Route::get('/addproduct','App\Http\Controllers\myController@showproductform');
//to insert a product
Route::post('/storeproduct','App\Http\Controllers\myController@store')->name('storeproduct');
// to show data
Route::get('/showproduct','App\Http\Controllers\myController@show')->name('showproduct');
// to insert homepage
Route::get('/homepage','App\Http\Controllers\myController@homepage')->name('homepage');