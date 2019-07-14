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
Route::group(['prefix' => 'admin'], function() {
    Route::get('menu/create','Admin\MenuController@add');
    Route::get('menu/create', 'Admin\MenuController@add');
    Route::post('menu/create', 'Admin\MenuController@create');
    // Route::post('menu/create', 'Admin\MenuController@post');
    Route::get('menu/edit', 'Admin\MenuController@edit'); // 追記
    Route::post('menu/edit', 'Admin\MenuController@update');
    Route::get('menu/delete','Admin\MenuController@delete');
    Route::get('menu', 'Admin\MenuController@index');
  
    // Route::get('carts', 'CartController@index');
     
   
});
Route::get('/', 'MenuController@index');

Route::get('reserves/index','ReserveController@index');
Route::post('reserves/create','ReserveController@create');
