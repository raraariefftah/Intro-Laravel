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

Route::get('/index', 'HomeController@index');

Route::get('/register', 'AuthController@register');

Route::post('/selamatdatang', 'AuthController@Test');

Route::get('/master', function() {
    return view('adminlte.master');
});

Route::get('/', function() {
    return view('items.index');
});

Route::get('/data-tables', function() {
    return view('items.data-tables');
});

Route::get('/items/create', function() {
    return view('items.create');
});