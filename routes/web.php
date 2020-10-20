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

Route::get('/','CardController@index')->name('card.index');
Route::post('entry','CardController@entry')->name('card.entry');
Route::get('out','CardController@out')->name('card.out');
Route::patch('exit','CardController@exit')->name('card.exit');



