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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/reportes','reportesController@index');  //yaaa
Route::post('/reportes','reportesController@store'); //yaaaaaa
Route::put('/reportes/{id}','reportesController@update'); //yaaaaa
Route::delete('/reportes/{id}','reportesController@destroy');//yaaaaaaaaa
Route::get('/reportes/{id}','reportesController@show');//yaaaaa   
>>>>>>> c7b5b8d34e5954c40ab1e3222fd41c4d67fad72f
