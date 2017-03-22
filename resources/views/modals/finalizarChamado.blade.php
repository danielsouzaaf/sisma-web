<div class="modal fade" tabindex="-1" role="dialog" id="modalFinalizarChamado">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nova observação</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="">
          <div class="form-group">
            <div class="col-sm-12">
              <select class="form-control col-sm-8" name="status" id="selectStatus">
                <option value="">Selecione o status</option>
                <option value="0">Finalizado com sucesso</option>
                <option value="1">Finalizado sem sucesso</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputObservacaoFinal" class="col-sm-2 control-label">Observação</label>
            <div class="col-sm-10">
              <textarea style="resize:none;" type="text" class="form-control" id="inputObservacaoFinal" rows="4" placeholder="Observação"></textarea>
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
