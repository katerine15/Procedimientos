<!doctype html>
<html lang="en">

<head>
  <title>INICIO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <?php
    include('bnadmin.php');
    ?>
  </header>
  <main>
    <div class="container mt-3">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-2"></div>
        <div class="col-8">
          <!-- inicio tabla -->
          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">identificacion</th>
                <th scope="col">tipodocumento</th>
                <th scope="col">celular</th>
                <th scope="col">direccion</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrrar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql3 = "SELECT * FROM persona WHERE 1";
              
              $consulta3 = mysqli_query($link,$sql3);
              $a = 1;

              while($row3=mysqli_fetch_array($consulta3))
              {
                echo '<tr>
                <th scope="row">'.$a.'</th>
                <td>'.$row3['nombre'].'</td>
                <td>'.$row3['apellido'].'</td>
                <td>'.$row3['correo'].'</td>
                <td>'.$row3['identificacion'].'</td>
                <td>'.$row3['tipoi'].'</td>
                <td>'.$row3['celular'].'</td>
                <td>'.$row3['direccion'].'</td>
                <td><a data-bs-toggle="modal" data-bs-target="#exampleModal'.$row3['idpersona'].'" href="#"><img src="./img/edit.png"></a> <?php include("exampleModal3") ?> </td>
                <td><a href="borrarp.php?idpersona='.$row3['idpersona'].'&&user='.$user.'"><img src="img/del2.png" '.' onclick="if(!confirm('."'Va a Eliminar la Persona'".'))return false"></a></td>
              </tr>';
              $a++;
              include("modaledit.php");
              }
              ?>
            </tbody>
          </table>
          <!-- fin tabla -->
          <!-- inicio modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel3">Editar</h5>

                                </div>
                                <div class="modal-body">
                                  
                                    <!-- inicio formulario -->
                                    <form class="row g-3" action="ctrl.php" method="post" enctype="multipart/form-data">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" id="inputEmail4" value="<?php if(isset($nombre)){echo $nombre;} ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Apellido</label>
                                            <input type="text" name="apellido" class="form-control" id="inputPassword4" value="<?php if(isset($apellido)){echo $apellido;} ?>" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Correo</label>
                                            <input type="email" name="correo" class="form-control" id="inputAddress" value="<?php if(isset($correo)){echo $correo;} ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Identificación</label>
                                            <input type="num" name="identificacion" class="form-control" id="inputEmail4" value="<?php if(isset($identificacion)){echo $identificacion;} ?>" required>
                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputState" class="form-label">Tipo</label>
                                            <select id="inputState" class="form-select" name="tipodocumento">
                                                <option >...</option>
                                                <option value="CC" >CC</option>
                                                <option value="TI">TI</option>
                                                <option value="CE">CE</option>
                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Celular</label>
                                            <input type="text" name="celular" class="form-control" id="inputEmail4" value="<?php if(isset($celular)){echo $celular;} ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Dirección</label>
                                            <input type="text" name="direccion" class="form-control" id="inputPassword4" value="<?php if(isset($direccion)){echo $direccion;} ?>" required>
                                        </div>
                                        <div>
                                            <INPUT TYPE="hidden" NAME="SIZE_FILE" VALUE="10024">
                                            <input type="file" class="form-control" id="exampleInputPassword1" name="uploadedFile" />

                                        </div>

                                        <button type="submit" class="btn btn" style="background-color: #fbcdc4">Registrarse</button>
                                    </form>
                                    <!-- fin formulario -->
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>

          <!-- fin modal -->
        </div>
        <div class="col-2"></div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>