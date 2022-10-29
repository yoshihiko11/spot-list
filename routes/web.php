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

// ログイン時表示
Route::group(['middleware' => 'auth'], function() {
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::post('/posts', 'PostController@store')->name('posts.store');
    Route::put('/posts/{post}', 'PostController@update');
    Route::delete('/posts/{post}', 'PostController@delete');
    
});

Route::get('/', 'PostController@index');
Route::get('/search/', 'SearchController@searchPost')->name('posts.search');
Route::get('/posts/{post}', 'PostController@show');
// いいね実装 
Route::get('/posts/{post}/check', 'LikeController@check')->name('like.check');
Route::get('/posts/{post}/count', 'LikeController@count')->name('like.count');
Route::resource('posts.likes', 'LikeController', [
 'only' => ['store'],
]);

Auth::routes();