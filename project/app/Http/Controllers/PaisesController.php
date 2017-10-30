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
    	if ($pais->status == 1) {
    		$pais->status = 0;
    		if ($pais->save()) {
    			return redirect('paises');
    		}
    	}
    	if ($pais->status == 0) {
    		$pais->status = 1;
    		if ($pais->save()) {
    			return redirect('paises');
    		}
    	}
    }
}
