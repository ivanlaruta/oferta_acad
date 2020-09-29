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

Route::get('/certificaciones.consultar', function () {
    return view('certificaciones.pagina_web.consultar');
})->name('certificaciones.consultar');

Route::get('/certificaciones.verificar', function () {
    return view('certificaciones.pagina_web.verificar');
})->name('certificaciones.verificar');

Route::get('/certificaciones.habilitar', function () {
    return view('certificaciones.habilitar');
})->name('certificaciones.habilitar');

route::get('certificaciones.ajax_consultar',[
		'uses' =>'CertificacionesController@ajax_consultar',
		'as'   =>	'certificaciones.ajax_consultar'
	]);


route::get('certificaciones.ajax_verificar',[
		'uses' =>'CertificacionesController@ajax_verificar',
		'as'   =>	'certificaciones.ajax_verificar'
	]);

route::get('certificaciones.ajax_verificar',[
		'uses' =>'CertificacionesController@ajax_verificar',
		'as'   =>	'certificaciones.ajax_verificar'
	]);

route::get('certificaciones.ajax_habilitar',[
		'uses' =>'CertificacionesController@ajax_habilitar',
		'as'   =>	'certificaciones.ajax_habilitar'
	]);

route::get('certificaciones.update_habilitar',[
		'uses' =>'CertificacionesController@update_habilitar',
		'as'   =>	'certificaciones.update_habilitar'
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


route::get('contacto.form',[
		'uses' =>'ContactoController@form',
		'as'   =>	'contacto.form'
	]);

route::get('contacto.form_save',[
		'uses' =>'ContactoController@form_save',
		'as'   =>	'contacto.form_save'
	]);

route::get('inscripcion.form',[
		'uses' =>'Servicios@form',
		'as'   =>	'inscripcion.form'
	]);

route::get('inscripcion.form_save',[
		'uses' =>'Servicios@form_save',
		'as'   =>	'inscripcion.form_save'
	]);

route::get('inscripcion.validar_ci',[
		'uses' =>'Servicios@validar_ci',
		'as'   =>	'inscripcion.validar_ci'
	]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
