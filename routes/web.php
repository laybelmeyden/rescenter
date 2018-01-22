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

Route::get('/', 'MainController@index');

Route::get('/Meropriyatiya', 'MainController@mero');
Route::get('/Novosti', 'MainController@new');
Route::get('/Contacti', 'MainController@contact');
Route::get('/Documents', 'MainController@doc');

Route::get('/mero{solo}', 'MainController@merosolo');
Route::get('/new{solo}', 'MainController@newsolo');

Route::post('/footerform', 'MainController@footerform');
Route::post('/info', 'HomeController@info');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
