
<div class="modal fade" id="modalSucursal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Sucursal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre" id="form_sucursal_nombre">
            </div>
           <div class="form-group">
           <select class="form-control" id="select_sucursal_banco"></select>
           </div>
          
      </div>
      <div class="modal-footer">
   
        <button class="btn btn-primary"  onclick="enviar_sucursal()">Crear</button>
      </div>
    </div>
  </div>
</div>