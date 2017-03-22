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
                  <div class="col-sm-12">
                    <select class="form-control col-sm-8" name="demanda" id="selectDemanda">
                      <option value="">Selecione a demanda</option>
                      <option value="0">Torneira</option>
                      <option value="1">Mesa</option>
                      <option value="2">Porta</option>
                    </select>
                  </div>
                </div><br>
                <div class="form-group">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Concluir</button>
                    <a type="submit" class="btn btn-default" href="/home">Cancelar</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @stop
