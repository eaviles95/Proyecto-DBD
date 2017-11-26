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

Route::get('/', function () {
    return view('welcome');
});
Route::get('validate', function () {
    return 'get! ';
});
Route::post('validate', function () {
});
Route::post('validate', 'pruebaPostController@validates');

Route::get('/p', function () {
    return view('pruebaPost');
});
Route::get('/user',function(){
	return view('user');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/action','ActionController@index');


Route::get('/help', function () {
    return view('help');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/voluntier', function () {
    return view('voluntier');
});

Route::get('/date', function () {
    return view('date');
});



Route::get('/profile', function () {
    return view('profile');     
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/map', function () {
    return view('map');
});


Route::get('/donateAnonymous', function () {
    return view('donateAnonymous');
});




Route::get('/catastrophe2', function () {
    $regions ['datos'] = [];
    return view('pruebaBaseDatos0Vista', $regions);
});
Route::get('/catastrophe2', 'CatastropheController@create');
Route::get('/catastrophe2', 'CatastropheController@prueba');



Route::get('pruebaBaseDatosVista', function () {
	$data ['datos'] = [];
	$data2 ['datosConsulta'] = [];
    return view('pruebaBaseDatos0Vista', $data, $data2);
});



Auth::routes();

//Catastrophes Actions
Route::get('/catastrophesAndActions', 'CatastrophesAndActionsController@showCatastrophes');

//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@create');

Route::post('crearBaseDatos', 'pruebaBaseDatos@create');

Route::post('actualizarBaseDatos', 'pruebaBaseDatos@guardar');

Route::post('consultaWhere', 'pruebaBaseDatos@consultaWhere');

Route::post('mostrarBaseDatos', 'pruebaBaseDatos@mostrar');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('storeCatastrophe', 'CatastropheController');


//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@obtenerDatos');



Route::resource('nuevaMedida','CreateActionsController');

Route::post('refresh','CreateActionsController@refresh');


//actions
Route::get('/actions','ActionsController@index');