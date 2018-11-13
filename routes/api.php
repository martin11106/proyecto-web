<?php

use Illuminate\Http\Request;
use App\reportes;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return 'user';//$request->user();
});
Route::get('/user','userController@index');
Route::post('user','userController@guardar');
Route::put('user/{id}','userController@update');
Route::delete('user/{id}','userController@delete');
Route::post('auth/register', 'AuthController@register');


Route::post('auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
  Route::get('auth/user', 'AuthController@user');
  Route::post('auth/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'jwt.refresh'], function(){
  Route::get('auth/refresh', 'AuthController@refresh');
});



Route::get('/reportes','reportesController@index');  //yaaa
Route::post('/reportes','reportesController@store'); //yaaaaaa
Route::put('/reportes/{id}','reportesController@update'); //yaaaaa
Route::delete('/reportes/{id}','reportesController@destroy');//yaaaaaaaaa
Route::get('/reportes/{id}','reportesController@show');//yaaaaa   