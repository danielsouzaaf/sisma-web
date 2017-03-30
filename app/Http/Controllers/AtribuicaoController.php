<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;

class AtribuicaoController extends Controller
{

    public function store($id, Request $request)
    {
        $chamado = Chamado::find($id);

    }
}
