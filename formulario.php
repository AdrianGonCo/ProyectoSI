<!-- Agregar Nuevo -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4 class="modal-title" id="myModalLabel">Agregar usuario</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="POST" action="agregar.php" autocomplete="off">

            <div class="row form-group">
              <div class="col-sm-2">
                <label class="control-label" style="position:relative; top:7px;">Nombre:</label>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-sm-2">
                <label class="control-label" style="position:relative; top:7px;">Primer Apellido:</label>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-sm-2">
                <label class="control-label" style="position:relative; top:7px;">Edad:</label>
              </div>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="edad">
              </div>
            </div>

            <div class="form-group">
              <label for="nivel">Grado</label>
              <div>
                <select class="form-control" name="nivel">
                  <option>Seleccionar</option>
                  <option value="no se nadar">No se nadar</option>
                  <option value="principiante">Principianete</option>
                  <option value="intermedio">Intermedio</option>
                  <option value="avanzado">Avanzado</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="sexo">Sexo</label>
              <div>
                <select class="form-control" name="sexo">
                  <option>Seleccionar</option>
                  <option value="masculino">Masculino</option>
                  <option value="femenino">Femenino</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="turno">Turno</label>
              <div>
                <select class="form-control" name="turno">
                  <option>Seleccionar</option>
                  <option value="matutino">Matutino</option>
                  <option value="vespertino">Vespertino</option>
                </select>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
        <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</a>
          </form>
      </div>

    </div>
  </div>
</div>