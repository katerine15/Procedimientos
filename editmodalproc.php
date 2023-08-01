<!-- Modal 2-->

<div class="modal fade" id="editModal<?php echo $rowc['idprocedimiento']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- inicio form -->
                <form action="ctrleditar2.php" method="post" enctype="multipart/form-data">
                    
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">procedimiento:</label>
                            <textarea type="text" class="form-control" placeholder="procedimiento" name="procedimiento"><?php echo $rowc['procedimiento']; ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">descripcion:</label>
                            <textarea type="text" class="form-control" placeholder="descripcion" name="descripcion" value=""><?php echo $rowc['descripcion']; ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Costo:</label>
                            <textarea type="text" class="form-control" placeholder="costo" name="costo" value=""><?php echo $rowc['costo']; ?></textarea>
                        </div>
                        <input type="hidden" value="<?php echo $user; ?>" name="user">
                        <input type="hidden" value="<?php echo $rowc['idprocedimiento']; ?>" name="idproceds">

                        <div class="md-3">
                            <label for="inputEmail4" class="form-label">Foto:</label>
                            <INPUT TYPE="hidden" NAME="SIZE_FILE" VALUE="10024">
                            <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-light" style="background-color: #fbcdc4">Cerrar</button>
                        <button type="submit" class="btn btn-light" style="background-color: #fbcdc4">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>