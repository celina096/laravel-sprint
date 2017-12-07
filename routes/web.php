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
Route::resource('/configuracion/gasto', 'GastosController')->middleware('auth');
Route::get('/configuracion/gasto-listar', 'GastosController@listar')->middleware('auth');
Route::resource('/configuracion/tipos_de_gastos', 'Tipo_de_gastoController')->middleware('auth');
Route::resource('/registros/registrodegastos', 'RegistrodeGastosController')->middleware('auth');
Route::resource('/clientes', 'ClienteController')->middleware('auth');
Route::resource('/ingresos/mensual', 'IngresoMensualController')->middleware('auth');
Route::resource('/ingresos', 'IngresosController')->middleware('auth');
Route::post('/ingresos/ingresos', 'IngresosController@asignar')->name('ingresos.asignar')->middleware('auth');
Route::resource('/pruebas', 'PruebaController')->middleware('auth');
Route::get('/profile', 'UserController@profile')->middleware('auth');


Route::get('/vistas/egresos/tipo_gasto', 'Vistas\Egresos\Tipo_GastoController@index')->name('vistas.egresos.tipo_gasto')->middleware('auth');
Route::get('/vistas/egresos/tipo_gasto/select_gasto/{id}', 'Vistas\Egresos\Tipo_GastoController@select_gasto')->middleware('auth');
Route::get('/vistas/egresos/tipo_gasto/suma_importe/{id}', 'Vistas\Egresos\Tipo_GastoController@suma_importe')->middleware('auth');
Route::get('/vistas/egresos/tipo_gasto/{periodo}', 'Vistas\Egresos\Tipo_GastoController@periodo')->middleware('auth');

Route::get('/vistas/egresos/tipo', 'Vistas\Egresos\TipoController@index')->name('vistas.egresos.tipo')->middleware('auth');
Route::get('/vistas/egresos/tipo/select_tipo/{id}/{periodo}', 'Vistas\Egresos\TipoController@select_tipo')->middleware('auth');

Auth::routes();

Route::get('/home', 'UserController@profile')->name('home');

Route::post('/', 'EmailController@sendMail');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/profile', 'UserController@updateAvatar');
Route::get('/preguntas', function() {
    return view('faq');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'ApiController@newsapi');
Route::post('/source_id', 'ApiController@newsapi');