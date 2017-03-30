<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ocorrencias = \App\Ocorrencia::all();

        $chamados = \App\Chamado::all();
        return view('home', compact('ocorrencias',  'chamados'));

    }
}
