<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"6564773"],
            (object)["nome"=>"Pedro", "tel"=>"6464646"],
        ];
        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o retorno do criar ContatoController";
    }
    public function editar()
    {
        return "Esse é o retorno do editar ContatoController";
    }
}
