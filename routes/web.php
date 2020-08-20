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


Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');




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

Route::get('/consulta_certificados', function () {
    return view('certificaciones.consulta_certificados');
})->name('consulta_certificados');

route::get('Certificaciones.lista',[
		'uses' =>'CertificacionesController@lista',
		'as'   =>	'Certificaciones.lista'
	]);

route::get('Certificaciones.consulta',[
		'uses' =>'CertificacionesController@consulta',
		'as'   =>	'Certificaciones.consulta'
	]);

route::get('Certificaciones.busca_curso',[
		'uses' =>'CertificacionesController@busca_curso',
		'as'   =>	'Certificaciones.busca_curso'
	]);

route::get('Certificaciones.habilitar_entrega',[
		'uses' =>'CertificacionesController@habilitar_entrega',
		'as'   =>	'Certificaciones.habilitar_entrega'
	]);

route::get('pago.res_consulta_pagos',[
		'uses' =>'PagoController@res_consulta_pagos',
		'as'   =>	'pago.res_consulta_pagos'
	]);

Route::get('/consulta_pagos', function () {
    return view('servicios.pagos.consulta_pagos');
})->name('consulta_pagos');

// Route::resource('Certificaciones', 'CertificacionesController');


Route::get('test', function () {
    return view('layouts.main');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
