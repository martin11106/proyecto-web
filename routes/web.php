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
    return view('create');
});
Route::get('/blog', function (){
    return view('welcome');
});

<<<<<<< HEAD

Route::get('/t', function (){
    return view('ranking');
});


=======
route::get('/test',function(){
    return view('test');
});

>>>>>>> 7e08d0dd91da01677f6d2c545c8d18375659067f
Route::post('/usuario','userController@guardar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reportes','reportesController@index');  //yaaa
Route::post('/reportes','reportesController@store'); //yaaaaaa
Route::put('/reportes/{id}','reportesController@update'); //yaaaaa
Route::delete('/reportes/{id}','reportesController@destroy');//yaaaaaaaaa
<<<<<<< HEAD
Route::get('/reportes/{id}','reportesController@show');//yaaaaa   

Route::resource('user', 'userController',['except'=>'show']);
=======
Route::get('/reportes/{id}','reportesController@show');//yaaaaa

//---Hacer Preguntas ---

Route::apiResource('/makeQuestion','makeQuestionController');


//----------------------
>>>>>>> 7e08d0dd91da01677f6d2c545c8d18375659067f
