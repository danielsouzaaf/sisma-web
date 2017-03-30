<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use App\Ocorrencia;

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

    public function store($chamadoid, $ocorrenciaid)
    {
        Ocorrencia::find($ocorrenciaid)->update(['chamado_id' => Chamado::find($chamadoid)->id]);

        return redirect()->route('home');
    }
}
