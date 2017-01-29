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
    return view('adsense');
});

Route::get('/login','ClientController@login');

Route::get('/register','ClientController@register');

Route::get('/news','ClientController@news');

Route::get('/dbresult','dbController@dbresult');

Route::get('dbinserttest','dbController@dbinserttest');

Route::post('/form','dbController@form');

Route::post('/loginform','dbController@loginform');

?>