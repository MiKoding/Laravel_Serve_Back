<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contatos;

class ContatoController extends Controller
{
    public function index(){
        $contatos = Contatos::all();
        return response()->json($contatos);
    }

    public function store(Request $request){
        $contatos = new Contatos([
            'Nome' => $request->input( 'Nome'),
            'Email' => $request->input('Email'),
            'Foto' => $request ->input('Foto'),
            'Numero'=> $request -> input('Numero'),
        ]);
        $contatos-> save();
        return response()->json('Contato Cadastrado');
    }

    public function show($id){
        $contatos = Contatos::find($id);
        return response() -> json($contatos);
    }

    public function update(Request $request, $id){
        $contatos = Contatos::find($id);
        $contatos->update($request->all());
        return response()->json('Contato Atualizado');
    }

    public function destroy($id){
        $contatos = Contatos::find($id);
        $contatos->delete();
        return response()->json('Contato Deletado');
    }
}
