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

Route::get('/datasi', 'App\Http\Controllers\DatasController@inde');
Route::get('/datas', 'App\Http\Controllers\DatasController@index');

Route::get('/datas/create', 'App\Http\Controllers\DatasController@create');
Route::get('/datas/{data}', 'App\Http\Controllers\DatasController@show');
Route::post('/datas', 'App\Http\Controllers\DatasController@store');
Route::get('/', function () {
    return view('index');
});

Route::get('/daftar-kost', function () {
    return view('daftar-kost');
});
Route::get('/inputkos', function () {
    return view('inputkos');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/profile.show', function () {
    return view('show');
});