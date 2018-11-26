<?php



Route::get('/', function () {/* la diagonal es la raiz y es lo que aparece primero */
    return view('login');
});

<<<<<<< HEAD
Route::get('/ranking', function () {/* la diagonal es la raiz y es lo que aparece primero */
=======
Route::get('/blog', function () {
    return view('blog');
});


Route::get('/t', function (){
>>>>>>> 1ab3e8162034e37d208fbf4a1e9b522321b48620
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

//----------------------
