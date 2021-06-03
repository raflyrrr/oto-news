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

Auth::routes([
                'verify'=>false,
                'reset'=>false]);
Route::get('/', 'BlogController@index');
Route::get('/isi-post/{slug}', 'BlogController@isi_blog')->name('blog.isi');
Route::get('/list-blog', 'BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/list-tag/{tags}', 'BlogController@list_tag')->name('blog.tag');
Route::get('/search', 'BlogController@search')->name('blog.search');

Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/post/tampil_hapus','PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore{id}','PostController@restore')->name('post.restore');
    Route::delete('/post/kill{id}','PostController@kill')->name('post.kill');
    Route::resource('category','CategoryController');
    Route::resource('tag','TagController');
    Route::resource('post','PostController');
    Route::resource('user', 'UserController');
});