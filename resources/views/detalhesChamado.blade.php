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
              <li class="list-group-item"><strong>Demanda: </strong> {{ \App\Demanda::find($chamado->demanda_id)->descricao }}</li>
              <li class="list-group-item"><strong>Local: </strong>{{ \App\Ocorrencia::where('chamado_id', $chamado->id)->get()[0]->local }}</li>
              <li class="list-group-item"><strong>Status: </strong>{{ \App\Status::find($chamado->status_id)->created_at }}</li>
              <li class="list-group-item"><strong>Data de abertura: </strong>{{ $chamado->created_at }}</li>
            </ul>            <br>
            <h4 style="float:left">Observações</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalObservacao">Nova observação</a>
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-3">Data de registro</th>
                  <th class="col-md-8">Descrição</th>
                  <th class="col-md-1"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($observacoes as $observacao)
                <tr>
                  <td>{{ $observacao->created_at }}</td>
                  <td>{{ $observacao->observacao }}</td>
                  <td>
                    <a type="button" class="btn btn-primary">Excluir</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>         <br>
            <h4 style="float:left">Atribuição</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalAtribuicao">Nova atribuição</a>
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-3">Data de atribuição</th>
                  <th class="col-md-2">Prazo previsto</th>
                  <th class="col-md-3">Técnico</th>
                  <th class="col-md-2"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($atribuicoes as $atribuicao)
                <tr>
                  <td>{{ $atribuicao->created_at }}</td>
                  <td>{{ $atribuicao->prazo_previsto }} dias</td>
                  <td>{{ \App\Tecnico::find($atribuicao->tecnico_id)->nome }}</td>
                  <td>
                    <a type="button" class="btn btn-primary" href="/detalhes-atribuicao/{{ $atribuicao->id }}">Detalhes</a>
                    <a type="button" class="btn btn-primary">Excluir</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <br><hr>
            <?php //status alterado para FINALIZADO COM SUCESSO ou FINALIZADO SEM SUCESSO ?>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFinalizarChamado">Finalizar chamado</a>
            <?php //status alterado para CANCELADO ?>
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
