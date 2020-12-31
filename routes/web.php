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

Route::get('/', function () {
    return view('client.index');
});
Route::get('/menu', function () {
    return view('client.menu');
});
Route::get('/cart', function () {
    return view('client.cart');
});
Route::get('/login', function () {
    return view('client.login');
});
Route::get('/clientLogin', function () {
    return view('client.clientLogin');
});
Route::get('/orderConfirmation', function () {
    return view('client.orderConfirmation');
});