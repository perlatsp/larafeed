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

Route::group(['prefix'=>'admin'],function (){
    Route::get('/',function (){
        return view('admin.dashboard');
    });

    Route::resource('posts','PostsController');
    Route::resource('categories','CategoryController');
//    Route::group(['prefix'=>'posts'],function (){
//        Route::get('/',['uses'=>'PostsController@index']);
//        Route::get('/{id}/edit',['uses'=>'PostsController@edit']);
//
//    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
