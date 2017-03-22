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
            <li class="list-group-item"><strong>Local:</strong> </li>
            <li class="list-group-item"><strong>Descrição:</strong> </li>
            <li class="list-group-item"><strong>Data de abertura:</strong> </li>
          </ul>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Selecione um dos chamados abaixo para vincular a esta ocorrência</h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th class="col-md-6">Demanda</th>
                <th class="col-md-4">Status</th>
                <th class="col-md-2"></th>
              </tr>
            <?php
             /* @foreach($ocorrencias as $ocorrencia)
                <tr>
                  <td>{{ $ocorrencia->local }}</td>
                  <td>{{ $ocorrencia->descricao }}</td>
                </tr>
              @endforeach--> */
              ?>
              <tr>
                <td>kk eae men</td>
                <td>Esperando atribuição</td>
                <td>
                  <a type="button" class="btn btn-primary" href="">Selecionar</a>
                </td>
              </tr>
              <tr>
                <td>kk eae men</td>
                <td>Esperando atribuição</td>
                <td>
                  <a type="button" class="btn btn-primary" href="">Selecionar</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop
