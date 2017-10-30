<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoImg;

class LogoImgController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        dd(app_path());
        exit;
        $fechaInicialImg = $request->get("fechaInicioImg") . " " . $request->get("horaInicioImg");
        $fechaFinalImg = $request->get("fechaFinalImg") . " " .$request->get("horaFinalImg");
        $logImagen = new LogoImg();
        if ($file = $request->file('file')) {
            $file     = $request->file('file');
            $nameComp = md5(time()) . '.' . $file->getClientOriginalExtension();
            $path     = base_path() . '/img/logo/';
            $file->move($path, $nameComp);
        }
        else{
            $nameComp = "";
        }
        if ($logoMini = $request->file('fileMini')) {
            $logoMini     = $request->file('fileMini');
            $nameCompMini = md5(time()) . '.' . $logoMini->getClientOriginalExtension();
            $path     = base_path() . '/img/logo/';
            $logoMini->move($path, $nameCompMini);
        }
        else{
            $nameCompMini = "";
        }
        $logImagen->longImage = $nameComp;
        $logImagen->endDate = $fechaFinalImg;
        $logImagen->url = $request->get("url");
        $logImagen->startDate = $fechaInicialImg;
        $logImagen->minImage = $nameCompMini;
        $logImagen->tooltip = $request->get('tooltip');
        $logImagen->country = $request->get('pais');
        if ($logImagen->save()) {
            return redirect('logo');
        }
    }
    public function show($id)
    {

    }
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
            $nameComp = $logImagen->longImage;
        }
        if ($logoMini = $request->file('fileMini')) {
            $logoMini     = $request->file('fileMini');
            $nameCompMini = md5(time()) . '.' . $logoMini->getClientOriginalExtension();
            $path     = public_path() . '/img/logo/';
            $logoMini->move($path, $nameComp);
        }
        else{
            $nameCompMini = $logImagen->minImage;
        }

        $logImagen->longImage = $nameComp;
        $logImagen->minImage = $nameCompMini;
        $logImagen->url = $request->get("url");
        $logImagen->tooltip = $request->get("tooltip");
        $logImagen->startDate = $fechaInicialImg;
        $logImagen->country = $request->get('pais');
        $logImagen->endDate = $fechaFinalImg;
        if ($logImagen->save()) {
            return redirect('logo');
        }
    }
    public function update(Request $request, $id)
    {

    }
    public function eliminar($id)
    {
        $logImagen = LogoImg::find($id);
        if ($logImagen->delete()) {
            return redirect('logo');
        }
    }
}
