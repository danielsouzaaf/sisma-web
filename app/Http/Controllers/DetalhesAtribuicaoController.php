<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalhesAtribuicaoController extends Controller
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
      $tecnicos = \App\Tecnico::all();
      $atribuicao = \App\Atribuicao::find($id);
      //$observacoes = \App\ObsAtribuicao::where('atribuicao_id', $id)->get();
      return view('detalhesAtribuicao', compact('tecnicos', 'atribuicao'));
    }
}
