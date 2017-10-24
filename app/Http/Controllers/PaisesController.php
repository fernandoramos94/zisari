<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;

class PaisesController extends Controller
{
    public function index()
    {
    	$paises = Paises::all();
    	return view('paises.index', [
            'paises' => $paises,
        ]);
    }
    public function updatePais($id)
    {
    	$pais = Paises::find($id);
    	if ($pais->estado == 1) {
    		$pais->estado = 0;
    		if ($pais->save()) {
    			return redirect('paises');
    		}
    	}
    	if ($pais->estado == 0) {
    		$pais->estado = 1;
    		if ($pais->save()) {
    			return redirect('paises');
    		}
    	}
    }
}
