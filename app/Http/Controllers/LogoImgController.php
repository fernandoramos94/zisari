<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoImg;

class LogoImgController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fechaInicialImg = $request->get("fechaInicioImg") . " " . $request->get("horaInicioImg");
        $fechaFinalImg = $request->get("fechaFinalImg") . " " .$request->get("horaFinalImg");
        $logImagen = new LogoImg();
        if ($file = $request->file('file')) {
            $file     = $request->file('file');
            $nameComp = md5(time()) . '.' . $file->getClientOriginalExtension();
            $path     = public_path() . '/img/logo/';
            $file->move($path, $nameComp);
        }
        $logImagen->imagen = $nameComp;
        $logImagen->url = $request->get("url");
        $logImagen->fechaInicio = $fechaInicialImg;
        $logImagen->fechaFinalizacion = $fechaFinalImg;
        $logImagen->estado = 1;
        if ($logImagen->save()) {
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
        $fechaInicialImg = $request->get("fechaInicioImg") . " " . $request->get("horaInicioImg");
        $fechaFinalImg = $request->get("fechaFinalImg") . " " .$request->get("horaFinalImg");
        $logImagen = LogoImg::find($request->get('id'));
        if ($file = $request->file('file')) {
            $file     = $request->file('file');
            $nameComp = md5(time()) . '.' . $file->getClientOriginalExtension();
            $path     = public_path() . '/img/logo/';
            $file->move($path, $nameComp);
        }
        else{
            $nameComp = $logImagen->imagen;
        }
        $logImagen->imagen = $nameComp;
        $logImagen->url = $request->get("url");
        $logImagen->fechaInicio = $fechaInicialImg;
        $logImagen->fechaFinalizacion = $fechaFinalImg;
        $logImagen->estado = 1;
        if ($logImagen->save()) {
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
        $logImagen = LogoImg::find($id);
        if ($logImagen->delete()) {
            return redirect('logo');
        }
    }
}
