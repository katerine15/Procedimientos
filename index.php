<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- Inicia navbar  -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fbcdc4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#exampleModal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#exampleModal2">Registrarse </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- fin navbar -->
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col mt-3 text-center">
                    <?php
                    if (isset($_GET['flag'])) {
                        $flag = $_GET['flag'];
                    } else {
                        $flag = 70;
                    }
                    switch ($flag) {
                        case 1:
                            echo "<h4>Usuario y/o clave incorrecto!! </h4>";
                            break;
                        case 2:
                            echo "<h4>Vuelva  pronto </h4>";
                            break;
                        case 3:
                            echo "<h4>SE REGISTRO EXITOSAMENTE</h4>";
                            break;
                        case 4:
                            echo "<h4>NO SE REGISTRO</h4>";
                            break;
                        case 5:
                            echo "<h4>Error!! usuario ya existe</h4>";
                            break;
                        case 6:
                            echo "<h4>REGISTRADO</h4>";
                            break;
                        case 7: 
                            {
                                echo "<h4>arichivo no permitido</h4>";
                                $nombre = $_GET['nombre'];
                                $apellido = $_GET['apellido'];
                                $correo = $_GET['correo'];
                                $identificacion = $_GET['identificacion'];
                                $tipodocumento = $_GET['tipodocumento'];
                                $celular = $_GET['celular'];
                                $direccion = $_GET['direccion'];
                            }
                            break;
                        case 8:
                            {
                                echo "<h4>ARCHIVO NO PERMITIDO</h4>";
                                $procedimiento = $_GET['procedimiento'];
                                $descripcion = $_GET['descripcion'];
                                $costo = $_GET['costo'];
                            }
                            break;
                    }
                    ?>
                    <!-- Modal 2-->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">REGISTRARSE</h5>

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
                                            <input type="file" class="form-control" id="exampleInputPassword1" name="uploadedFile"/>

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

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>

                                </div>
                                <div class="modal-body">
                                    <!-- inicio formulario -->
                                    <form action="ctrlindex.php" method="post">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                                            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electronico con nadie.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                            <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
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
                    <!-- inicio tarjeta -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./img/carousel-1.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/carousel-2.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/carousel-3.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- fin tarjeta -->
                </div>
            </div>

            <div class="row justify-content-center align-items-center g-2">
                <div class="col fixed-bottom">footer</div>
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