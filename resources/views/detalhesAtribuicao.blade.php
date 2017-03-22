@extends('master')
  @section('head')
  <title>Detalhes da Atribuição</title>
  @stop
  @section('content')
    @include('modals.novaObsAtribuicao')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <strong>Atribuição</strong>
          </div>
          <div class="panel-body">
            <h4>Detalhes</h4>
            <ul class="list-group">
              <li class="list-group-item"><strong>Data de atribuição:</strong> </li>
              <li class="list-group-item"><strong>Prazo previsto:</strong> </li>
              <li class="list-group-item"><strong>Técnico:</strong> </li>
            </ul>            <br>
            <h4 style="float:left">Observações</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalObsAtribuicao">Nova observação</a>
            <table class="table">
              <tr>
                <th class="col-md-3">Data de registro</th>
                <th class="col-md-8">Descrição</th>
                <th class="col-md-1"></th>
              </tr>
              <tr>
                <td>123456</td>
                <td>Lorem ipsum dolor sit amet.</td>
                <td>
                  <a type="button" class="btn btn-primary">Excluir</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#mostrarModalObsAtribuicao').on('shown.bs.modal', function () {
      $('myImput').focus()
    })
  </script>

  @stop
