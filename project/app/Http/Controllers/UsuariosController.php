<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Usuarios;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = DB::table('users')
            ->join('usuarios', 'users.id', '=', 'usuarios.userId')
            ->select('users.email as correo, users.name, users.ip, users.status', 'usuarios.*')
            ->get();
        return view('usuarios.index', [
            'usuario' => $usuario,
        ]);
    }
    public function create()
    {
        return view("auth.register");
    }
    public function store(Request $request)
    {
        $newUser = new User();
        $newUser->name = $request->get('name');
        $newUser->email = $request->get('email');
        $newUser->password = bcrypt($request->get('password'));
        $newUser->ip = $request->get('ipAddress');
        $newUser->isAdmin = 0;
        $newUser->status = 1;

        if ($newUser->save()) {
            $nameComp = "";
            $nameFoto = "";
            if ($file = $request->file('portada')) {
                $file     = $request->file('portada');
                $nameComp = md5(time()) . '.' . $file->getClientOriginalExtension();
                $path     = './img/img_users/portadas/';
                $file->move($path, $nameComp);
            }
            else{
                $nameComp = "$2a$04$1lrlqTr8WqiM3NHlYEEGy.png";
            }
            
            if ($foto = $request->file('foto')) {
                // Subir imagenes en la carpeta publica image/provider
                $foto     = $request->file('foto');
                $nameFoto = md5(time()) . '.' . $foto->getClientOriginalExtension();
                $url     = './img/img_users/perfil/';
                $foto->move($url, $nameFoto);
            }else{
                $nameFoto = "TFQirkLGuJP6ipZyCNuJIEdCHMk5Ce7cO.png";
            }
            $newUsuario = new Usuarios();
            $newUsuario->userId = $newUser->id;
            $newUsuario->firtName = $request->get('nombres');
            $newUsuario->LastName = $request->get('apellidos');
            $newUsuario->gender = $request->get('genero');
            $newUsuario->country = $request->get('pais');
            $newUsuario->day = $request->get('dia');
            $newUsuario->mounth = $request->get('mes');
            $newUsuario->year = $request->get('anio');
            $newUsuario->numberPhone = $request->get('numeroCelular');
            $newUsuario->document = $request->get('documento');
            $newUsuario->email = $request->get('correo');
            $newUsuario->coverPhoto = $nameComp;
            $newUsuario->profilePhoto = $nameFoto;
            if ($newUsuario->save()) {
                return redirect('');
            }
        }
    }
    public function getUser($mail)
    {
        
    }
    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function eliminar($id)
    {
        $usuarios = Usuarios::where('userId', $id)->first();
        $user = User::find($id);

        if ($usuarios->delete()) {
            if ($user->delete()) {
                return redirect("usuarios");
            }
        }
    }
    public function bloquearUser($id){
        $users = User::find($id);
        $users->status = 0;
        if ($users->save()) {
            return redirect('usuarios');
        }
    }
    public function activarUser($id)
    {
        $users = User::find($id);
        $users->status = 1;
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
