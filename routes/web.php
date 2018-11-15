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

Route::get('/', function () {/* la diagonal es la raiz y es lo que aparece primero */
    return view('welcome');
});
Route::get('/blog', function (){
    return view('blog');
});

Route::post('/usuario','userController@guardar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
