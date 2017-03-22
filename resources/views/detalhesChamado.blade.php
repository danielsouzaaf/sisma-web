@extends('master')
  @section('head')
  <title>Detalhes do Chamado</title>
  @stop
  @section('content')
    @include('modals.novaObservacao')
    @include('modals.novaAtribuicao')
    @include('modals.finalizarChamado')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <strong>Chamado</strong>
          </div>
          <div class="panel-body">
            <h4>Detalhes</h4>
            <ul class="list-group">
              <li class="list-group-item"><strong>Demanda:</strong> </li>
              <li class="list-group-item"><strong>Local:</strong> </li>
              <li class="list-group-item"><strong>Status:</strong> </li>
              <li class="list-group-item"><strong>Data de abertura:</strong> </li>
            </ul>            <br>
            <h4 style="float:left">Observações</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalObservacao">Nova observação</a>
            <table class="table">
              <tr>
                <th class="col-md-3">Data de registro</th>
                <th class="col-md-8">Descrição</th>
                <th class="col-md-1"></th>
              </tr>
              <tr>
                <td>123456789</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td>
                  <a type="button" class="btn btn-primary">Excluir</a>
                </td>
              </tr>
            </table>         <br>
            <h4 style="float:left">Atribuição</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalAtribuicao">Nova atribuição</a>
            <table class="table">
              <tr>
                <th class="col-md-3">Data de atribuição</th>
                <th class="col-md-2">Prazo previsto</th>
                <th class="col-md-3">Técnico</th>
                <th class="col-md-2"></th>
              </tr>
              <tr>
                <td>123456789</td>
                <td>30 dias</td>
                <td>Eletricista</td>
                <td>
                  <a type="button" class="btn btn-primary" href="/detalhes-atribuicao">Detalhes</a>
                  <a type="button" class="btn btn-primary">Excluir</a>
                </td>
              </tr>
            </table>
            <br><hr>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFinalizarChamado">Finalizar chamado</a>
            <a type="button" class="btn btn-primary">Cancelar chamado</a>
          </div>

        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $('#mostrarModalAtribuicao').on('shown.bs.modal', function () {
    $('myImput').focus()
  })
  $('#mostrarModalObservacao').on('shown.bs.modal', function () {
    $('myImput').focus()
  })
  $('#modalFinalizarChamado').on('shown.bs.modal', function () {
    $('myImput').focus()
  })

</script>
  @stop
