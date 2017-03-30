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
            <strong>Ocorrência</strong>
          </div>
          <div class="panel-body">
            <p style="text-align:center"><img src="https://placehold.it/200x200" alt=""></div></p>
          <ul class="list-group">
            <li class="list-group-item"><strong>Local:</strong> {{ $ocorrencia->local }}</li>
            <li class="list-group-item"><strong>Descrição:</strong> {{ $ocorrencia->descricao }}</li>
            <li class="list-group-item"><strong>Data de abertura:</strong> {{ $ocorrencia->created_at }}</li>
          </ul>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Selecione um dos chamados abaixo para vincular a esta ocorrência</h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-6">Demanda</th>
                  <th class="col-md-4">Status</th>
                  <th class="col-md-2"></th>
                </tr>
              </thead><tbody>
                @foreach($chamados as $chamado)
                  <tr>
                    <td>{{ $chamado->demanda->descricao }}</td>
                    <td>{{ $chamado->status->descricao }}</td>
                    <td>
                      <a class="btn btn-primary" href="{{ route('vincular.ocorrencia', [$chamado->id, $ocorrencia->id]) }}">Vincular</a>
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
