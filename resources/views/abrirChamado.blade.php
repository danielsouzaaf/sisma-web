@extends('master')
  @section('head')
  <title>Abrir Chamado</title>
  @stop
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-info">
            <div class="panel-heading">
              <strong>Ocorrência</strong>
            </div>
            <div class="panel-body">
              <p style="text-align:center"><img src="https://placehold.it/200x200" alt=""></div></p>
            <ul class="list-group">
              <li class="list-group-item"><strong>Local:</strong> </li>
              <li class="list-group-item"><strong>Descrição:</strong> </li>
              <li class="list-group-item"><strong>Data de abertura:</strong> </li>
            </ul>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Abrir chamado vinculado a esta ocorrência</h4>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" action="" method="">
                <div class="form-group">
                  <label for="inputDemanda" class="col-sm-1 control-label">Demanda</label>
                  <div class="col-sm-10">
                    <textarea style="resize:none;"  type="text" class="form-control" id="inputDemanda" rows="4" placeholder="Demanda"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success">Concluir</button>
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @stop
