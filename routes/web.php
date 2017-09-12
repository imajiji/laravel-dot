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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{name}', function($name) {
//   return 'hello! ' . $name;
// });

// Route::get('/', function() {
//   return 'hello!';
// });

// Route::get('/', function() {
//     return view('posts.index');
// });

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::post('/posts', 'PostsController@store');
Route::patch('/posts/{id}', 'PostsController@update');
Route::delete('/posts/{id}', 'PostsController@destroy');