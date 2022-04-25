<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcompUsuario;



class EcompUsuarioController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logar(Request $request){
        $this->validate($request,[
            'login'=>'required',
            'senha'=>'required'
        ],[
            'login.required'=>'Login é obrigatório',
            'senha.required'=>'Senha é obrigatória'
        ]);

        $usuario = new EcompUsuario();
        
        $usuario->login= $request->login;
        $usuario->senha= $request->senha;

        $usuario2 = EcompUsuario::where("login",$usuario->login)->first();
        if($usuario2!=null){
            if($usuario2->senha == $usuario->senha){
                return redirect('/inicial');
            }
        }
        return redirect('/');
    
    }

    public function cadastrarUsuario(){
        return view('cadastro');
    }

    public function adicionar(Request $request){
        $usuario = new EcompUsuario;

        $usuario->nome= $request->nome;
        $usuario->login= $request->login;
        $usuario->senha= $request->senha;

        $usuario->save();
        return redirect('/inicial');
    }
}
