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

Route::get('/', "PostsController@index");
Route::get('/admin/posts/create',"PostsController@create");
Route::get('/posts/{post}', "PostsController@show");
Route::post('/post', "PostsController@store");
Route::get('admin/posts/{post}/edit', "PostsController@edit");
Route::patch('/posts/{post}', "PostsController@update");
Route::delete('/posts/{post}', "PostsController@destroy");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/stat', function(){return view('stat');});
});

Route::get('/about', function (){return view('about');});
