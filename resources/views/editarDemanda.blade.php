@extends('master')
  @section('head')
  <title>Editar demanda</title>
  @stop
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
        <div class="panel-body">
            <h4>Editar demanda</h4>
            <hr>
            <form class="form-horizontal" action="" method="">
              <div class="form-group">
                <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputDescricao" placeholder="Descrição"></input>
                </div>
              </div>
              <div class="modal-footer">
                <a type="button" class="btn btn-default" href="/demandas">Cancelar</a>
                <button type="button" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop
