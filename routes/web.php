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
Route::get('/', 'FrontController@index')->name('welcome');
Route::get('/covid', 'FrontController@covid')->name('covid');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/privacy', 'FrontController@privacy')->name('privacy');
Route::get('/blog', 'FrontBlogController@index')->name('blog');
Route::get('/details/{slug?}', 'FrontBlogController@blog_details')->name('blog_details');
Route::get('/country/{code?}', 'FrontController@country')->name('country');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/posts', 'BlogPostController');
