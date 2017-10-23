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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function eliminar($id)
    {
        $usuarios = User::find($id);
        if ($usuario->delete()) {
            return redirect("usuarios");
        }
    }
    public function bloquearUser(Request $request, $id){
        $users = User::find($id);
        $users->status = 0;
        if ($users->save()) {
            return redirect('usuarios');
        }
    }
    public function updatePassword(Request $request)
    {
        $usuario = User::where('email', $request->get("email"))->first();
        // dd($usuario);
        $usuario->password = bcrypt($request->input('password'));
        if ($usuario->save()) {
            return redirect('');
        }
    }
}
