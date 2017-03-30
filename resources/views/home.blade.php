@extends('master')
  @section('head')
  <title>Home</title>
  @stop
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <strong>Chamados</strong>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-6">Demanda</th>
                  <th class="col-md-4">Status</th>
                  <th class="col-md-2"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($chamados as $chamado)
                  <tr>
                    <td>{{ $chamado->demanda->descricao }}</td>
                    <td>{{ $chamado->status->descricao }}</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="/detalhes-chamado/{{ $chamado->id }}">Detalhes</a>
                    </td>
                  </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <strong>Ocorrências</strong>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-2">Local</th>
                  <th class="col-md-6">Descrição</th>
                  <th class="col-md-2"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($ocorrencias as $ocorrencia)
                <tr>
                  <td>{{ $ocorrencia->local }}</td>
                  <td>{{ $ocorrencia->descricao }}</td>
                  <td>
                    <a type="button" class="btn btn-primary"  href="/abrir-chamado/{{ $ocorrencia->id }}">Abrir Chamado</a>
                    <a type="button" class="btn btn-primary" href="/vincular-chamado/{{ $ocorrencia->id }}">Vincular a um Chamado</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop
