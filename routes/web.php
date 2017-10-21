<?php
use Illuminate\Http\Request;
use App\LogoText;
use App\LogoImg;

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
Route::post('/agregaLogoImg', function(Request $request){
	$fechaInicialImg = $request->get("fechaInicioImg") . " " . $request->get("horaInicioImg");
	$fechaFinalImg = $request->get("fechaFinalImg") . " " .$request->get("horaFinalImg");
	$logImagen = new LogoImg();
	$logImagen->imagen = $request->get("imagen");
	$logImagen->url = $request->get("url");
	$logImagen->fechaInicio = $fechaInicialImg;
	$logImagen->fechaFinalizacion = $fechaFinalImg;
	$logImagen->estado = 1;
	if ($logImagen->save()) {
		return redirect('home');
	}
});
Route::post('/agregaLogoText', function(Request $request){
	$fechaFinal = $request->get("fechaInicio") . " ". $request->get("horaInicio");
	$fechaInicial = $request->get("fechaFinal") . " " . $request->get("horaFinal");
    $logo = new LogoText();
    $logo->titulo = $request->get("titulo");
    $logo->fechaInicio = $fechaInicial;
    $logo->fechaFinalizacion = $fechaFinal;
    $logo->estado = 1;
    if ($logo->save()) {
		return redirect('home');
	}
});

Route::get('/usuarios', 'UsuariosController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
