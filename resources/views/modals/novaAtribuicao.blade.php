<div class="modal fade" tabindex="-1" role="dialog" id="mostrarModalAtribuicao">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nova atribuição</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="">
          <div class="form-group">
            <label for="inputPrazo" class="col-sm-3 control-label">Prazo previsto</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputPrazo" placeholder="Prazo previsto"></input>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <label for="selectTecnico" class="col-sm-3 control-label">Selecione o técnico</label>
              <select class="form-control col-sm-8" name="tecnico" id="selectTecnico">
                <option value=""></option>
                <option value="0">Arthur</option>
                <option value="1">Ayrton</option>
                <option value="2">Daniel</option>
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
