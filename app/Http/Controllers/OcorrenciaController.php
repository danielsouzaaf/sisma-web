<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Response;
use Illuminate\Http\JsonResponse;

class OcorrenciaController extends Controller
{
  public function validateRulesOnCreate(Request $request)
  {
    $rules = [
      'descricao' => 'required',
      //'solicitante_id' => 'required',
      'local' => 'required',

    ];
    return Validator::make($request->all(), $rules);
  }
  public function store(Request $request)
  {

    $validator = $this->validateRulesOnCreate($request);
    if($validator->fails())
    {
      return Response::json($validator->messages(), 400);
    }

    $model = new \App\Ocorrencia();

    foreach ($model->getFillables() as $column)
    {
      if ($request->get($column) != "")
      {
        $model->$column = $request->get($column);
      }
    }
    $model->solicitante_id = 1;

    DB::beginTransaction();
    try{
      $model->save();
      DB::commit();
    }
    catch(\Exception $ex)
    {
      return Response::json($ex->getMessage(), 400);
      DB::rollback();
    }

    return Response::json([], 200);
  }
  public function show($id)
  {
    Return \App\Ocorrencia::find($id);
  }
  public function index()
  {
    return \App\Ocorrencia::all();
  }
  public function delete(Request $request)
  {

  }
  public function update(Request $request)
  {

  }
}
