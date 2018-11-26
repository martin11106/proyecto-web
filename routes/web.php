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
    return view('login');
});

Route::get('/blog', function () {
    return view('home');
});


Route::get('/t', function (){
    return view('ranking');
});


Route::get('/test',function(){
    return view('test');
});

Route::post('/usuario','userController@guardar');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reportes','reportesController@index');  //yaaa
Route::post('/reportes','reportesController@store'); //yaaaaaa
Route::put('/reportes/{id}','reportesController@update'); //yaaaaa
Route::delete('/reportes/{id}','reportesController@destroy');//yaaaaaaaaa
Route::get('/reportes/{id}','reportesController@show');//yaaaaa

Route::resource('user', 'userController',['except'=>'show']);
Route::get('/reportes/{id}','reportesController@show');//yaaaaa

//---Hacer Preguntas ---

Route::apiResource('/makeQuestion','makeQuestionController');

// rutas de matrias

Route::apiResource('/materias','materiaController');

// el de abajo miente
//        |
//        |
//        v

//---------------------------------------------------------
// AQUI EMPEZÓ A TRABAJAR EL GRAN Y PODEROSO SMARTNETO

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/saveuser','userController@guardar');

Route::post('login','Auth\LoginController@login')->name('login');

Route::get('/logout','Auth\LoginController@logout')->name('logout');
