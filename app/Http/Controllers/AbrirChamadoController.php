<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbrirChamadoController extends Controller
{
    public function index()
    {
        /*
        $ocorrencias = \App\Ocorrencia::all();
        $demandas = \App\Demanda::all();
        return view('home', compact('ocorrencias', 'demandas'));
        */
    }
    public function show($id)
    {
      //Return \App\Ocorrencia::find($id);
      $ocorrencia = \App\Ocorrencia::find($id);
      $demandas = \App\Demanda::all();
      return view('abrirChamado', compact('ocorrencia', 'demandas'));
    }
}
