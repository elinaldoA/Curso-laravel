<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return "Esse é o retorno do index ContatoController";
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
