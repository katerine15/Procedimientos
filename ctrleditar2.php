<?php
  include('conex.php');
 
  $link = Conectarse();
  $procedimiento = $_POST['procedimiento'];
  $descripcion = $_POST['descripcion'];
  $costo = $_POST['costo'];
  $user = $_POST['user'];
  $idproced = $_POST['idproceds'];
  $foto = $_FILES['foto'];
 
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
      $sql = "UPDATE procedimiento SET  procedimiento = '$procedimiento', descripcion = '$descripcion', costo = '$costo', foto = '$nombrearchivo' WHERE procedimiento.idprocedimiento = '$idproced'";
      $consulta = mysqli_query($link, $sql);
      $carpeta = $rowc["idprocedimiento"];
      $micarpeta = 'fotos-procedimiento/' . $carpeta;
      if (!file_exists($micarpeta)) {
        mkdir($micarpeta, 0777, true);
      }

      if (is_uploaded_file($nombretemporal)) {
        copy($nombretemporal, $micarpeta . "/" . $nombrearchivo); //copia el archivo a la carpeta del usuario
      }
      header('Location:procedimiento.php?user='.$user.'&&flag=1');
    } else {
      header('Location:procedimiento.php?user=' . $user . '&&flag=2');
    }
    //
  }
  else
  {
    $sql = "UPDATE procedimiento SET procedimiento = '$procedimiento', descripcion = '$descripcion', costo = '$costo' WHERE procedimiento.idprocedimiento = '$idproced'";
    $consulta = mysqli_query($link, $sql);
    header('Location:procedimiento.php?user='.$user);
  }
?>