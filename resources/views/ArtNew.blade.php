<!-- Modal -->
<form action= "{{ route('articulos.store') }}" method="POST">
@csrf 

<div class="modal fade" id="frmCreateArt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Articulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Nombre del articulo</label>
                    <div class="input-group">
                        <input class="form-control" name="Name" type="text" required>
                    </div>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Precio</label>
                <input type= "number" class="form-control" name="Price" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
            <label for="">Estatus</label>
            <select data-placeholder="Selecciona un Estatus" name="Estatus"  class="form-control" >
              <option value="ALTA">ALTA</option>
              <option value="BAJA">BAJA</option>
              </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Disponible</label>
                <input type= "number" class="form-control" name="Stock" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-circle btn-secondary" data-bs-dismiss="modal"><i class="fa fa-chevron-left"></i></button>
        <button type="submit" class="btn btn-circle btn-primary" ><i class="fa fa-floppy-o"></i></button>
      </div>
    </div>
  </div>
</div>
</form>