<div class="modal fade" tabindex="-1" role="dialog" id="mostrarModalDemanda">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nova demanda</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{ route('demandas.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputDescricao" class="col-sm-3 control-label">Descrição</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputDescricao" name="descricao" placeholder="Descrição">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
