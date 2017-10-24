<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoText;

class LogoTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logo.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fechaInicial = $request->get("fechaInicio") . " ". $request->get("horaInicio");
        $fechaFinal = $request->get("fechaFinal") . " " . $request->get("horaFinal");
        $logo = new LogoText();
        $logo->titulo = $request->get("titulo");
        $logo->tituloMini = $request->get('tituloMini');
        $logo->fechaInicio = $fechaInicial;
        $logo->pais = $request->get('pais');
        $logo->fechaFinalizacion = $fechaFinal;
        $logo->estado = 1;
        if ($logo->save()) {
            return redirect('logo');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $fechaInicial = $request->get("fechaInicio") . " ". $request->get("horaInicio");
        $fechaFinal = $request->get("fechaFinal") . " " . $request->get("horaFinal");
        $logo = LogoText::find($request->get('id'));
        $logo->titulo = $request->get("titulo");
        $logo->tituloMini = $request->get('tituloMini');
        $logo->fechaInicio = $fechaInicial;
        $logo->pais = $request->get('pais');
        $logo->fechaFinalizacion = $fechaFinal;
        $logo->estado = 1;
        if ($logo->save()) {
            return redirect('logo');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $text = LogoText::find($id);
        if ($text->delete()) {
            return redirect('logo');
        }
    }
}
