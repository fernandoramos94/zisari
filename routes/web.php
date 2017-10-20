<?php
use Illuminate\Http\Request;
use App\LogoText;

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
Route::get('/logo/nuevo', "LogoTextController@create" );
Route::post('/agregaLogoText', function(Request $request){
	
	dd($request->get('titulo'));

    exit;
    $logo = new LogoText();
    $logo->titulo = $request->get("titulo");
    $logo->fechaInicio = "";
    $logo->fechaFinalizacion = "";
    $logo->estado = true;
});
Route::get('/usuarios', 'UsuariosController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
