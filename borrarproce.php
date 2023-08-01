<?php
include('conex.php');
$idprocedimiento = $_GET['idprocedimiento']; 
$user  = $_GET['user'];
$link=Conectarse();
$sql =  "DELETE FROM procedimiento WHERE procedimiento.idprocedimiento=$idprocedimiento";

$consulta = mysqli_query($link, $sql);

header("location:procedimiento.php?user=".$user)
?>