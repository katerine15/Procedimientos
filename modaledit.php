<!-- Modal 2-->

<div class="modal fade" id="exampleModal<?php echo $row3['idpersona']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- inicio form -->
        <form action="ctrleditar.php" method="post" enctype="multipart/form-data">
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombre:</label>
              <input type="text" class="form-control" placeholder="Nombres" name="nombre" value="<?php echo $row3['nombre']; ?>">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Apellido:</label>
              <input type="text" class="form-control" placeholder="Apellidos" name="apellido" value="<?php echo $row3['apellido']; ?>">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="inputEmail4" class="form-label">Identificación:</label>
              <input type="number" class="form-control" placeholder="Número identificacion" name="identificacion" value="<?php echo $row3['identificacion']; ?>" readonly>
            </div>
            <div class="col">
              <label for="inputState" class="form-label">Tipo:</label>
              <select class="form-select" aria-label="Identificación" name="tipoi">
                <option selected>Tipo ID</option>
                <option value="CC">CC</option>
                <option value="TI">TI</option>
                <option value="DNI">DNI</option>
              </select>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <label for="inputAddress" class="form-label"> Correo:</label>
              <input type="email" class="form-control" placeholder="Correo" name="correo" value="<?php echo $row3['correo']; ?>">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="inputPassword4" class="form-label">Celular:</label>
              <input type="tel" class="form-control" placeholder="Celular" name="celular" value="<?php echo $row3['celular']; ?>">
            </div>
            <div class="col">
              <label for="inputPassword4" class="form-label">Dirección:</label>
              <input type="text" class="form-control" placeholder="Dirección Residencia" name="direccion" value="<?php echo $row3['direccion']; ?>">
            </div>
            <button type="submit" class="btn btn-light" style="background-color: #fbcdc4">Enviar</button>
          </div>

      </div>
    </div>


    </form> <input type="hidden" value="<?php echo $user; ?>" name="user">
  </div>
  <div class="row mt-2">
    <div class="col-12">
      <INPUT TYPE="hidden" NAME="SIZE_FILE" VALUE="10024">
      <label for="inputPassword4" class="form-label">Foto:</label>
      <input type="file" class="form-control" placeholder="foto" name="foto" accept=".jpg,.png,.jpeg">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">

      <!-- fin form -->
      <!-- </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>  -->
      <!-- Fin Modal 2 -->