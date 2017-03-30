<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalhesChamadoController extends Controller
{
    public function index()
    {
        /*
        $ocorrencias = \App\Ocorrencia::all();
        $demandas = \App\Demanda::all();
        $chamados = \App\Chamado::all();
        return view('home', compact('ocorrencias', 'demandas', 'chamados'));
        */
    }
    public function show($id)
    {

      $chamado = \App\Chamado::find($id);

      return view('detalhesChamado', ['chamado' => $chamado]);
    }
}
