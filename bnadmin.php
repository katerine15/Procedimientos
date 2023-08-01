        <!-- Inicia navbar  -->
        <?php
        $user = $_GET['user'];
        include('conex.php');
        $link = Conectarse();

        $sql = "SELECT persona.nombre, persona.apellido, persona.foto FROM persona WHERE persona.idpersona='$user'";

        $consulta = mysqli_query($link,$sql);

       

        $row = mysqli_fetch_array($consulta);
        ?>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fbcdc4" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?flag=2">SALIR</a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.php?user=<?php echo $user; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="procedimiento.php?user=<?php echo $user; ?>">PROCEDIMIENTO</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false ">
                                OPCIONES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal4" href="#exampleModal4">AGREGAR</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                usuario: <?php echo $row['nombre']; ?>
                <img src="fotos/<?php echo $user.'/'.$row['foto'];?>" class="rounded-pill" width="65" height="40">
        </nav>
        <!-- fin navbar -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">AGREGAR</h5>

                                </div>
                                <div class="modal-body">
                                    <!-- inicio formulario -->
                                    <form action="ctrl2.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre del procedimiento</label>
                                            <input type="text" name="procedimiento" class="form-control" id="procedimiento" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                                            <input type="text" name="descripcion" class="form-control" id="descripcion">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Costo</label>
                                            <input type="num" name="costo" class="form-control" id="costo">
                                            <input TYPE="hidden" NAME="user" VALUE="<?php echo $user ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                                            <INPUT TYPE="hidden" NAME="SIZE_FILE" VALUE="10024">
                                            <input type="file" class="form-control" id="exampleInputPassword1" name="uploadedFile"/>
                                        </div>

                                        <button type="submit" class="btn btn" style="background-color: #fbcdc4">Enviar</button>
                                    </form>
                                    <!-- fin formulario -->
                                </div>
                                <div class="modal-footer text-center">

                                </div>
                            </div>
                        </div>
                    </div>
        <!-- inicio modal -->
        <!-- fin modal -->