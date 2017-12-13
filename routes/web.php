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
Route::post('/home', 'UserController@updateAvatar');
/* hernan */
Route::get('/test', function(){

$user =new App\User;
$user->name='hernan';
$user->email='larzabalh@hotmail.com';
$user->rol='admin';
$user->password=bcrypt('123123');
$user->save();
return $user;
});

Route::post('/configuracion/gasto/crear', 'GastosController@crear');
Route::post('/configuracion/gasto/editar/{id}', 'GastosController@editar');
Route::post('/configuracion/gasto/eliminar/{id}', 'GastosController@eliminar');
Route::resource('/configuracion/gasto', 'GastosController');
Route::get('/configuracion/gasto-listar', 'GastosController@listar');
Route::resource('/configuracion/tipos_de_gastos', 'Tipo_de_gastoController');
Route::resource('/registros/registrodegastos', 'RegistrodeGastosController');
Route::resource('/clientes', 'ClienteController');
Route::resource('/ingresos/mensual', 'IngresoMensualController');
Route::resource('/ingresos', 'IngresosController');
  Route::post('/ingresos/ingresos', 'IngresosController@asignar')->name('ingresos.asignar');
Route::resource('/pruebas', 'PruebaController');


Route::get('/vistas/egresos/tipo_gasto', 'Vistas\Egresos\Tipo_GastoController@index')->name('vistas.egresos.tipo_gasto');
Route::get('/vistas/egresos/tipo_gasto/select_gasto/{id}', 'Vistas\Egresos\Tipo_GastoController@select_gasto');
Route::get('/vistas/egresos/tipo_gasto/suma_importe/{id}', 'Vistas\Egresos\Tipo_GastoController@suma_importe');
Route::get('/vistas/egresos/tipo_gasto/{periodo}', 'Vistas\Egresos\Tipo_GastoController@periodo');


Route::get('/vistas/egresos/tipo', 'Vistas\Egresos\TipoController@index')->name('vistas.egresos.tipo');
Route::get('/vistas/egresos/tipo/select_tipo/{id}/{periodo}', 'Vistas\Egresos\TipoController@select_tipo');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* fin hernan*/





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

Route::get('/home', 'UserController@profile');

Route::post('/', 'EmailController@sendMail');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/preguntas', function() {
    return view('faq');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'ApiController@newsapi');
Route::post('/source_id', 'ApiController@newsapi');
