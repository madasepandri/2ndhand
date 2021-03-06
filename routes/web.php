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
// Route::get('/about', function() {
//     return '<h1>TENTANG KAMI</h1>';
// });

// Route::get('/users/{id}', function ($id) {
//     return 'user dengan id '.$id;
// });

Route::get('/', 'StaticPagesController@index');
Route::get('/about', 'StaticPagesController@about');

Route::resource('posts', 'PostsController');