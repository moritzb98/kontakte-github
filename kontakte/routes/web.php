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
    return view('welcome');
});

Auth::routes();

Route::get('/kontakt', 'KontaktController@index')->name('home');

Route::resources([
    'kontakt' => 'KontaktController'
]);

Route::get('/kontakt/kontaktdetails/{kontakt}', 'KontaktController@show')->name('kontaktdetails');