<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;

class MembroController extends Controller
{
    public function listarMembros(){
        $membros = Membro::all();
        return view('listarmembros',['membros'=>$membros]);
    }

    public function buscarMembro(){
        return view('buscarmembro',['membros'=>null]);
    }

    public function busca(Request $request){

        $membros = Membro::where("nome",$request->nome)->get();
        return view('buscarmembro',['membros'=>$membros]);
    }

    public function cadastrarMembro(){
        return view('cadastrarMembro');
    }
    public function adicionarcadastro(Request $request){
        $membro = new Membro;

        $membro->nome = $request->nome;
        $membro->cargo = $request->cargo;

        $membro->save();
        return redirect('/cadastrarMembro');
    }
}
