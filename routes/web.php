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

// Route::get('/', function () {
//     return view('welcome');
// });


route::get('/',[
		'uses' =>'CursosController@index',
		'as'   =>	'cursos'
	]);

route::get('oferta_wapp',[
		'uses' =>'CursosController@oferta_wapp',
		'as'   =>	'oferta_wapp'
	]);

route::get('programacion_rrss',[
		'uses' =>'CursosController@programacion_rrss',
		'as'   =>	'programacion_rrss'
	]);

route::get('services',[
		'uses' =>'PruebaController@services',
		'as'   =>	'services'
	]);

Route::get('test', function () {
    return view('layouts.main');
});