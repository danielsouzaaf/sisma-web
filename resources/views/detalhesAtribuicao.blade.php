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
              <li class="list-group-item"><strong>Data de atribuição: </strong> {{ $atribuicao->created_at }}</li>
              <li class="list-group-item"><strong>Prazo previsto: </strong> {{ $atribuicao->prazo_previsto }} dias</li>
              <li class="list-group-item"><strong>Técnico: </strong>{{ \App\Tecnico::find($atribuicao->tecnico_id)->nome }}</li>
            </ul>            <br>
            <h4 style="float:left">Observações</h4>
            <a style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarModalObsAtribuicao">Nova observação</a>
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-3">Data de registro</th>
                  <th class="col-md-8">Descrição</th>
                  <th class="col-md-1"></th>
                </tr>
              </thead>
              <tbody>
              <?php  /*
                @foreach($observacoes as $observacao)
                <tr>
                  <td>{{ $opbsercacao->created_at }}</td>
                  <td>{{ $observacao->observacao }}</td>
                  <td>
                    <a type="button" class="btn btn-primary">Excluir</a>
                  </td>
                </tr>
                @endforeach
                */  ?>
              </tbody>
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
