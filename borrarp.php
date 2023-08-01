<?php
include('conex.php');
$idpersona = $_GET['idpersona']; 
$user  = $_GET['user'];
$link=Conectarse();
$sql =  "DELETE FROM persona WHERE persona.idpersona='$idpersona'";

$consulta = mysqli_query($link, $sql);

header("location:inicio.php?user=".$user)
?>