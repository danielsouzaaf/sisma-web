<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandaController extends Controller
{
    public function index()
    {
        $demandas = \App\Demanda::all();
        return view('demandas', compact('demandas'));
    }
    public function show($id)
    {
        $demanda = \App\Demanda::find($id);
        return view('editarDemanda', compact('demanda'));
    }
}
