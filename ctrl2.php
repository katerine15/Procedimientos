<?php
$user = $_POST['user'];
$procedimiento = $_POST['procedimiento'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];

$uploadedFile = $_FILES['uploadedFile'];
  
$cola= "&&procedimiento=".$procedimiento."&&descripcion=".$descripcion."&&costo=".$costo;

include('conex.php');
$link = Conectarse();

function div ($archivo)//Funcion que extrae la extension del nombre del archivo.
{
 $ext=explode(".",$archivo);//La funcion explode divide una cadena a partir de un parametro en este caso es el punto
 return end($ext);//Retorna la extension.
}
$extension=div($_FILES['uploadedFile']['name']);
$tam=$_FILES['uploadedFile']['size'];
$nombretemporal=$_FILES['uploadedFile']['tmp_name'];
$nombrearchivo=$_FILES['uploadedFile']['name'];

$sql2 = "SELECT * FROM procedimiento WHERE idprocedimiento = '$idprocedimiento'";

$consulta2 = mysqli_query($link,$sql2);

if($row2= mysqli_fetch_array($consulta2))
{
    header('location:procedimiento.php?flag=5');
}
else
{
    $permitido = array('jpg', 'gif', 'png', 'jpeg');
    if (in_array($extension, $permitido))
    {
        $sql = "INSERT INTO procedimiento ( `procedimiento`, `foto`, `descripcion`, `costo`) 
        VALUES ('$procedimiento', '$nombrearchivo', '$descripcion', '$costo')";
        $query = mysqli_query($link, $sql);

        $ultimo_id = mysqli_insert_id($link); 

        $carpeta = $ultimo_id;
        $micarpeta = 'fotos-procedimiento/'.$carpeta;
        if(!file_exists($micarpeta))
        {
            mkdir($micarpeta, 0777, true);
        }
    
        if(is_uploaded_file($nombretemporal))
        {
            copy($nombretemporal,$micarpeta."/".$nombrearchivo); //copia el archivo a la carpeta del usuario
        }
        header('location:procedimiento.php?user='.$user.'&&flag=6');
    }
    else
    {
        header('location:procedimiento.php?user='.$user.'&&flag=8'.$cola);
    }
    
 }

?>