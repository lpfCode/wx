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
Route::get('/wx', 'WxServerController@index');
Route::post('/wx','WxServerController@index');
Route::get('/menu/add', 'MenuController@add');
Route::get('/template/add', 'TemplateController@add');
Route::get('/message/add', 'MessageController@add');
Route::get('qr/add', 'QrController@add');

