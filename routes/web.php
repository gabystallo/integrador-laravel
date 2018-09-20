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


Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::get('/admin/posts', 'AdminPosts@index')->name('lista-posts');
Route::get('/admin/posts/nuevo', 'AdminPosts@nuevo')->name('nuevo-post');
Route::post('/admin/posts/nuevo', 'AdminPosts@crear');
Route::get('/admin/posts/{post}/editar', 'AdminPosts@editar')->name('editar-post');
Route::put('/admin/posts/{post}/editar', 'AdminPosts@guardar');
Route::delete('/admin/posts/{post}/eliminar', 'AdminPosts@eliminar')->name('eliminar-post');


Route::get('/', 'Front@home');


