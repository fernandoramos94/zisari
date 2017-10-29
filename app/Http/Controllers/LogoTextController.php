<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoText;

class LogoTextController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
        return view('logo.nuevo');
    }
    public function store(Request $request)
    {
        $fechaInicial = $request->get("fechaInicio") . " ". $request->get("horaInicio");
        $fechaFinal = $request->get("fechaFinal") . " " . $request->get("horaFinal");
        $logo = new LogoText();
        $logo->longTitle = $request->get("titulo");
        $logo->minTitle = $request->get('tituloMini');
        $logo->startDate = $fechaInicial;
        $logo->country = $request->get('pais');
        $logo->endDate = $fechaFinal;
        if ($logo->save()) {
            return redirect('logo');
        }
    }
    public function show($id)
    {

    }
    public function editar(Request $request)
    {
        $fechaInicial = $request->get("fechaInicio") . " ". $request->get("horaInicio");
        $fechaFinal = $request->get("fechaFinal") . " " . $request->get("horaFinal");
        $logo = LogoText::find($request->get('id'));
        $logo->longTitle = $request->get("titulo");
        $logo->minTitle = $request->get('tituloMini');
        $logo->startDate = $fechaInicial;
        $logo->country = $request->get('pais');
        $logo->endDate = $fechaFinal;
        if ($logo->save()) {
            return redirect('logo');
        }
    }
    public function update(Request $request, $id)
    {

    }
    public function eliminar($id)
    {
        $text = LogoText::find($id);
        if ($text->delete()) {
            return redirect('logo');
        }
    }
}
