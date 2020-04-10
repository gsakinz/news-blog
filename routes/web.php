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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/profilesetup', 'ProfileController@profilesetup');
Route::get('/settings', 'ProfileController@settings');
Route::get('/profile', 'ProfileController@profile');

Route::get('/post', 'PostController@post');
Route::post('/addPost', 'PostController@addPost');
Route::get('/postsettings', 'PostController@postsettings');


Route::get('/category', 'CategoryController@category');
Route::post('/addCategory', 'CategoryController@addCategory');

Route::get('/contact_us', 'ContactController@contact_us');
Route::post('/prayer', 'ContactController@prayer');

Route::get('/download', 'DownloadController@download');
Route::get('/timeline', 'TimelineController@timeline');
