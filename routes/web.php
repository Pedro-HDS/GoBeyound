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
    return view('welcome');
});
//testar se é o posts ou o nome da pasta//
Route::group(['prefix' => 'post'], function() {
    Route::get('', 'PostController@index')->name('posts_info.index');
    Route::get('{id}', 'PostController@show')->name('post_info.show')->where('id', '[0-9]+');
});
Route::group(['prefix' => 'login'], function() {
    Route::get('', 'LoginController@index')->name('login.index');
});