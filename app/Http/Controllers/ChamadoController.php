<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ocorrencia;
Use App\Chamado;
use App\Demanda;

class ChamadoController extends Controller
{

  public function validateRulesOnCreate(Request $request)
  {
    $rules = [
      'name' => 'required',
      'username' => 'required',
      'password' => 'required',
    ];
    return Validator::make($request->all(), $rules);
  }
  public function validateRulesOnUpdate(Request $request)
  {
    $rules = [
      'name' => 'required',
      'username' => 'required',
    ];
    return Validator::make($request->all(), $rules);
  }

  public function store($id, Request $request)
  {
      $ocorrencia = Ocorrencia::findOrFail($id);
      $chamado = new Chamado();
      $chamado->ocorrencia($ocorrencia);
      $demanda = Demanda::find($request->get('demanda'));
      $chamado->demanda_id = $demanda->id;
      $chamado->status_id = 1;

      $chamado->save();

  }
  public function show($id)
  {

  }
  public function index()
  {

  }
  public function delete(Request $request)
  {

  }
  public function update(Request $request)
  {

  }
}
