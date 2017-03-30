<div class="modal fade" tabindex="-1" role="dialog" id="mostrarModalAtribuicao">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nova atribuição</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="POST">
          <div class="form-group">
            <label for="inputPrazo" class="col-sm-3 control-label">Prazo previsto</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputPrazo" placeholder="Prazo previsto">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <select class="form-control col-sm-8" name="tecnico" id="selectTecnico">
                <option value="">Selecione o técnico</option>
                {{--@foreach($tecnicos as $tecnico)--}}
                  {{--<option value="{{$tecnico->id}}">{{$tecnico->nome}}</option>--}}
                {{--@endforeach--}}
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
