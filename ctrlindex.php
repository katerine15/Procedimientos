<?php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

include('conex.php');
$link = Conectarse();

$sql = "SELECT * FROM persona WHERE correo='$correo' AND identificacion = '$contraseña'";

echo $sql;

$consulta = mysqli_query($link, $sql);

if($row = mysqli_fetch_array($consulta))
{
    header('location: inicio.php?user='.$row['idpersona']);
}
else{
    header('location: index.php?flag=1');
}


?>