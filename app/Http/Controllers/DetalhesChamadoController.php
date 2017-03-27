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
      //Return \App\Ocorrencia::find($id);
      $ocorrencias = \App\Ocorrencia::all();
      $demandas = \App\Demanda::all();
      $chamado = \App\Chamado::find($id);
      $observacoes = \App\ObsChamado::where('chamado_id', $id)->get();
      $atribuicoes = \App\Atribuicao::where('chamado_id', $id)->get();
      return view('detalhesChamado', compact('ocorrencias', 'demandas', 'chamado', 'observacoes', 'atribuicoes'));
    }
}
