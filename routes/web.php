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
Route::post('/transaction/new', 'TransactionController@new');
Route::get('/transaction/delete/{id}', 'TransactionController@delete');


Route::get('/payment', 'PaymentController@index');
Route::get('/payment/delete/{id}', 'PaymentController@delete');
Route::post('/payment/new', 'PaymentController@new');


Route::get('/rooms', 'RoomController@index');
Route::post('/rooms/new', 'RoomController@new');
Route::get('/rooms/delete/{id}', 'RoomController@delete');


Route::get('/customers', 'CustomerController@index');
Route::post('/customers/new', 'CustomerController@new');
Route::get('/customers/delete/{id}', 'CustomerController@delete');