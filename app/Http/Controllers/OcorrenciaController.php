<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Response;

class OcorrenciaController extends Controller
{
  public function store(Request $request)
  {

    $validator = $this->validateRulesOnCreate($request);
    if($validator->fails())
    {
      //  return redirect(route('menus.create'))->withErrors($validator)->withInput();
    }
    $model = new App\Ocorrencia();

    foreach ($model->fillables as $column)
    {
      $model->$column = $request->get($column);
    }

    try
    DB::beginTransaction();
    try{
      $model->save();
      DB::commit();
    }
    catch(\Exception $ex)
    {
      DB::rollback();
    }


  }
  public function show($id)
  {

  }
  public function index()
  {
    return App\Ocorrencia::all();
  }
  public function delete(Request $request)
  {

  }
  public function update(Request $request)
  {

  }
}
