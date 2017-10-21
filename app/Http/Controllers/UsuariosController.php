<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = User::all();
        return view('usuarios.index', [
            'usuario' => $usuario,
        ]);
    }
    public function create()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser = new User();
        $nameComp = "";
        $nameFoto = "";
        if ($file = $request->file('portada')) {
            // Subir imagenes en la carpeta publica image/provider
            $file     = $request->file('portada');
            $nameComp = md5(time()) . '.' . $file->getClientOriginalExtension();
            $path     = public_path() . '/img/img_users/portadas/';
            $file->move($path, $nameComp);
        }
        else{
            $nameComp = "$2a$04$1lrlqTr8WqiM3NHlYEEGy.png";
        }
        if ($foto = $request->file('foto')) {
            // Subir imagenes en la carpeta publica image/provider
            $foto     = $request->file('foto');
            $nameFoto = md5(time()) . '.' . $foto->getClientOriginalExtension();
            $url     = public_path() . '/img/img_users/perfil/';
            $foto->move($url, $nameFoto);
        }else{
            $nameFoto = "TFQirkLGuJP6ipZyCNuJIEdCHMk5Ce7cO.png";
        }
        $newUser->name = $request->get('name');
        $newUser->email = $request->get('email');
        $newUser->password = bcrypt($request->get('password'));
        $newUser->nombres = $request->get('nombres');
        $newUser->apellidos = $request->get('apellidos');
        $newUser->genero = $request->get('genero');
        $newUser->pais = $request->get('pais');
        $newUser->dia = $request->get('dia');
        $newUser->mes = $request->get('mes');
        $newUser->anio = $request->get('anio');
        $newUser->ip = $request->get('ipAddress');
        $newUser->numeroCelular = $request->get('numeroCelular');
        $newUser->documento = $request->get('documento');
        $newUser->correo = $request->get('correo');
        $newUser->portado = $nameComp;
        $newUser->imagen = $nameFoto;
        if ($newUser->save()) {
            return redirect('');
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
