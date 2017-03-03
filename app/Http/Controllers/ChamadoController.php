<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

  public function store(Request $request)
  {

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
