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
            Chamados
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th class="col-md-8">Demanda</th>
                <th></th>
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
                <td>
                  <a type="button" class="btn btn-primary" href="/detalhes-chamado">Detalhes</a>
                </td>
              </tr>
              <tr>
                <td>kk eae men</td>
                <td>
                  <a type="button" class="btn btn-primary" href="/detalhes-chamado">Detalhes</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            Ocorrências
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th class="col-md-2">Local</th>
                <th class="col-md-6">Descrição</th>
                <th></th>
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
                <td>kk eae men</td>
                <td>
                  <a type="button" class="btn btn-primary"  href="/abrir-chamado">Abrir Chamado</a>
                  <a type="button" class="btn btn-primary">Vincular a um Chamado</a>
                </td>
              </tr>
              <tr>
                <td>kk eae men</td>
                <td>kk eae men</td>
                <td>
                  <a type="button" class="btn btn-primary"  href="/abrir-chamado">Abrir Chamado</a>
                  <a type="button" class="btn btn-primary">Vincular a um Chamado</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop
