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

Route::get('/',['uses'=>'PostsController@index']);


Route::resource('posts','PostsController');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('/',['uses'=>'DashboardController@index'])->name('admin');
    Route::resource('posts','PostsController');
    Route::resource('categories','CategoryController');
});

Route::get('login',['uses'=>'Auth\LoginController@showLogin'])->name('login');


Route::post('login',['uses'=>'Auth\LoginController@Login']);
Route::post('logout',['uses'=>'Auth\LoginController@Logout']);


Route::get('/home', 'HomeController@index')->name('home');
