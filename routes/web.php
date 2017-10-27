<?php
use Illuminate\Http\Request;
use App\LogoText;
use App\LogoImg;
use App\User;

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
    return view('auth.login');
});

Route::get('/logo/nuevo', function(){
	return view('logo.nuevo');
});

Route::get('/registro', 'UsuariosController@create');

Route::post('/agregarUser', 'UsuariosController@store');

Route::post('/agregaLogoImg', 'LogoImgController@store');

Route::post('/updateLogoText', 'LogoTextController@editar');

Route::get('/deleteLogoText/{id}', 'LogoTextController@eliminar');

Route::get('/deleteLogoImg/{id}', 'LogoImgController@eliminar');

Route::post('/updateLogoImg', 'LogoImgController@editar');

Route::post('/agregaLogoText', 'LogoTextController@store');

Route::get('/recuperarPassword', function(){
	return view('auth.passwords.reset');
});

Route::get('/preguntas', function(){
	return view('layout.preguntas');
});

Route::get('/layout', function(){
	return view('layout.index');
});

Route::post('/updatePass', 'deleteUsuario@updatePassword');

Route::get('/logo', function(){
	return view('logo.index');
});
Route::post('/getUser', function(){
	$usuarios = User::All();
	return Response::json($usuarios);
});

Route::get('/paises', 'PaisesController@index');

Route::get('/updatePais/{id}', 'PaisesController@updatePais');

Route::get('/bloquearUser/{id}', 'UsuariosController@bloquearUser');

Route::get('/activarUser/{id}', 'UsuariosController@activarUser');

Route::get('/deleteUsuario/{id}', 'UsuariosController@eliminar');

Route::get('/usuarios', 'UsuariosController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
