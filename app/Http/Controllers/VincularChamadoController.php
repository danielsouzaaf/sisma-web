<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VincularChamadoController extends Controller
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
      //Return \App\Ocorrencia::find($id);
      //Return \App\Ocorrencia::find($id);
      $ocorrencia = \App\Ocorrencia::find($id);
      $demandas = \App\Demanda::all();
      $chamados = \App\Chamado::all();
      return view('vincularChamado', compact('ocorrencia', 'demandas', 'chamados'));
    }
}
