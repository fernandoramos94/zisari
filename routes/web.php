<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\LogoText;
use App\LogoImg;
use App\User;
use App\Usuarios;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logo/nuevo', function(){
	return view('logo.nuevo');
})->middleware('auth');

Route::get('/registro', 'UsuariosController@create');

Route::post('/agregarUser', 'UsuariosController@store')->middleware('auth');

Route::post('/agregaLogoImg', 'LogoImgController@store')->middleware('auth');

Route::post('/updateLogoText', 'LogoTextController@editar')->middleware('auth');

Route::get('/deleteLogoText/{id}', 'LogoTextController@eliminar')->middleware('auth');

Route::get('/deleteLogoImg/{id}', 'LogoImgController@eliminar')->middleware('auth');

Route::post('/updateLogoImg', 'LogoImgController@editar')->middleware('auth');

Route::post('/agregaLogoText', 'LogoTextController@store')->middleware('auth');

Route::get('/recuperarPassword', function(){
	return view('auth.passwords.reset');
});

Route::get('/preguntas', function(){
	return view('layout.preguntas');
});

Route::get('/layout', function(){
	return view('layout.index');
})->middleware('auth');

Route::post('/updatePass', 'deleteUsuario@updatePassword');

Route::get('/logo', function(){
	return view('logo.index');
});

Route::post('/getUser', function(){
	$resultado =Input::get('email');
	// dd($resultado);

	$usuario = DB::table('users')
            ->join('usuarios', 'users.id', '=', 'usuarios.userId')
            ->select('users.*', 'usuarios.*')
            ->where('users.email', $resultado)
            ->get();
	return Response::json($usuario);
});

Route::get('/paises', 'PaisesController@index');

Route::get('/updatePais/{id}', 'PaisesController@updatePais');

Route::get('/bloquearUser/{id}', 'UsuariosController@bloquearUser')->middleware('auth');

Route::get('/activarUser/{id}', 'UsuariosController@activarUser')->middleware('auth');

Route::get('/deleteUsuario/{id}', 'UsuariosController@eliminar')->middleware('auth');

Route::get('/usuarios', 'UsuariosController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
