<!-- Editar usuarios-->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body">
        <!-- Formulario Editar usuarios-->
        <div class="container-fluid">
          <form method="POST" action="editar.php?id=<?php echo $row['id']; ?>">

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
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
              <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body">
        <p class="text-center">¿Eliminara a usuario:?</p>
        <h2 class="text-center"><?php echo $row['nombre'] . ' ' . $row['apellido']; ?></h2>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
        <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
      </div>

    </div>
  </div>
</div>