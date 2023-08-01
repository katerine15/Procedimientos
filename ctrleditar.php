<?php
  include('conex.php');
  $idpersona = $_POST['idpersona'];
  $link = Conectarse();
  $correo = $_POST['correo'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $tipoi = $_POST['tipoi'];
  $identificacion = $_POST['identificacion'];
  $celular = $_POST['celular'];
  $user = $_POST['user'];
  $foto=$_POST['foto'];
  // $cola="&&correo=".$correo."&&nombre=".$nombre."&&apellido=".$apellido."&&direccion=".$direccion."&&tipoi=".$tipoi."&&identificacion=".$identificacion."&&celular=".$celular;
  // //$foto=$_POST['foto'];

  function div($archivo) //Funcion que extrae la extension del nombre del archivo.
  {
    $ext = explode(".", $archivo); //La funcion explode divide una cadena a partir de un parametro en este caso es el punto
    return end($ext); //Retorna la extension.
  }
  $extension = div($_FILES['foto']['name']);
  $tam = $_FILES['foto']['size'];
  $nombretemporal = $_FILES['foto']['tmp_name'];
  $nombrearchivo = $_FILES['foto']['name'];

  if(!empty($nombrearchivo))
  {
    $permitido = array('jpg', 'gif', 'png', 'jpeg');
    if (in_array($extension, $permitido)) {
      $sql = "UPDATE persona SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', identificacion = '$identificacion', tipoi = '$tipoi', celular = '$celular', direccion = '$direccion', foto = '$nombrearchivo' WHERE persona.identificacion = '$identificacion'";
      $consulta = mysqli_query($link, $sql);
      $carpeta = $row2["idpersona"];
      $micarpeta = 'fotos/' . $carpeta;
      if (!file_exists($micarpeta)) {
        mkdir($micarpeta, 0777, true);
      }

      if (is_uploaded_file($nombretemporal)) {
        copy($nombretemporal, $micarpeta . "/" . $nombrearchivo); //copia el archivo a la carpeta del usuario
      }
      header('Location:inicio.php?user='.$user.'&&flag=1');
    } else {
      header('Location:inicio.php?user=' . $user . '&&flag=2');
    }
      //
  }
  else
  {
    $sql = "UPDATE persona SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', identificacion = '$identificacion', tipoi = '$tipoi', celular = '$celular', direccion = '$direccion' WHERE persona.identificacion = '$identificacion'";
    $consulta = mysqli_query($link, $sql);
    header('Location:inicio.php?user='.$user.'&&flag=1');
  }
?>