@extends('master')
  @section('head')
  <title>Demandas</title>
  @stop
  @section('content')
    @include('modals.novaDemanda')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
        <div class="panel-body">
            <h4 style="float:left">Demandas</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalDemanda">Nova demanda</a>
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-2">ID</th>
                  <th class="col-md-6">Descrição</th>
                  <th class="col-md-2"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($demandas as $demanda)
                <tr>
                  <td>{{ $demanda->id }}</td>
                  <td>{{ $demanda->descricao }}</td>
                  <td>
                    <a type="button" class="btn btn-primary" href="/editar-demanda/{{ $demanda->id }}">Editar</a>
                    <a type="button" class="btn btn-primary">Excluir</a>
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
  <script type="text/javascript">
    $('#mostrarModalDemanda').on('shown.bs.modal', function () {
      $('myImput').focus()
    })
  </script>
  @stop
