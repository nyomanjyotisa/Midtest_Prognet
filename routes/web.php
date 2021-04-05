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
    return redirect('dashboard');
});
Route::view('/dashboard', 'dashboard');
Route::get('/transaction', 'TransactionController@index');
Route::view('/payment', 'payment');
Route::get('/rooms', 'RoomController@index');
Route::get('/customers', 'CustomerController@index');