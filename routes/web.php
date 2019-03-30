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

Route::get('/', function () { /* ni get('/Rin' yg kita define user kena mana .. kalau p link tu dia akan return apa tu return view- view utk html */
    return view('welcome');/* check welcome kat resources view >welcome.blade.php*/
});

Route::get('/posts', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/posts/{post}', 'PostController@update')->name('posts.update');
Route::post('/posts/{post}/delete', 'PostController@delete')->name('posts.delete');


/*Route::get('/Rin', 'RinController@index')->name('Rin');//definr route name tu alliace .. struccture utk resouces*/