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

Route::prefix('transaction')->group(function(){
    Route::get('/', 'TransactionController@index');
    Route::post('/new', 'TransactionController@new');
    Route::get('/delete/{id}', 'TransactionController@delete');
    Route::get('/edit/{id}', 'TransactionController@edit');
    Route::post('/update/{id}', 'TransactionController@update');
});

Route::prefix('payment')->group(function(){
    Route::get('/', 'PaymentController@index');
    Route::get('/delete/{id}', 'PaymentController@delete');
    Route::post('/new', 'PaymentController@new');
    Route::get('/edit/{id}', 'PaymentController@edit');
    Route::post('/update/{id}', 'PaymentController@update');
});

Route::prefix('rooms')->group(function(){
    Route::get('/', 'RoomController@index');
    Route::post('/new', 'RoomController@new');
    Route::get('/delete/{id}', 'RoomController@delete');
    Route::get('/edit/{id}', 'RoomController@edit');
    Route::post('/update/{id}', 'RoomController@update');
});

Route::prefix('customers')->group(function(){
    Route::get('/', 'CustomerController@index');
    Route::post('/new', 'CustomerController@new');
    Route::get('/delete/{id}', 'CustomerController@delete');
    Route::get('/edit/{id}', 'CustomerController@edit');
    Route::post('/update/{id}', 'CustomerController@update');
});