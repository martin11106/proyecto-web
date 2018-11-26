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
    return view('blog');
});

Route::get('/ranking', function () {/* la diagonal es la raiz y es lo que aparece primero */
    return view('ranking');
});
Route::get('/blog', function (){
    return view('welcome');
});

Route::get('/perfil', function (){
    return view('perfil');
});

route::get('/test',function(){
    return view('test');
});

Route::post('/usuario','userController@guardar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reportes','reportesController@index');  //yaaa
Route::post('/reportes','reportesController@store'); //yaaaaaa
Route::put('/reportes/{id}','reportesController@update'); //yaaaaa
Route::delete('/reportes/{id}','reportesController@destroy');//yaaaaaaaaa

Route::get('/reportes/{id}','reportesController@show');//yaaaaa   

Route::resource('user', 'userController');

Route::get('/reportes/{id}','reportesController@show');//yaaaaa

//---Hacer Preguntas ---

Route::apiResource('/makeQuestion','makeQuestionController');


//----------------------
