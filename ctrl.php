<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$identificacion = $_POST['identificacion'];
$tipodocumento = $_POST['tipodocumento'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$uploadedFile = $_FILES['uploadedFile'];

$cola="&&correo=".$correo."&&nombre=".$nombre."&&apellido=".$apellido."&&identificacion=".$identificacion."&&direccion=".$direccion."&&tipodocumento=".$tipodocumento."&&celular=".$celular;

include('conex.php');
$link = Conectarse();

function div ($archivo)//Funcion que extrae la extension del nombre del archivo.
{
 $ext=explode(".",$archivo);//La funcion explode divide una cadena a partir de un parametro en este caso es el punto
 return $ext[1];//Retorna la extension.
}
$extension=div($_FILES['uploadedFile']['name']);
$tam=$_FILES['uploadedFile']['size'];
$nombretemporal=$_FILES['uploadedFile']['tmp_name'];
$nombrearchivo=$_FILES['uploadedFile']['name'];

$sql2 = "SELECT * FROM persona WHERE identificacion= '$identificacion'";

$consulta2 = mysqli_query($link,$sql2);

if($row2= mysqli_fetch_array($consulta2))
{
    header('location:index.php?flag=5');
}
else
{
    $permitido = array('jpg', 'gif', 'png', 'jpeg');
    if (in_array($extension, $permitido)) 
    {
        $sql = "INSERT INTO persona (`idpersona`, `nombre`, `apellido`, `correo`, `identificacion`, `tipoi`, `celular`, `direccion`, `foto`) 
        VALUES (NULL, '$nombre', '$apellido', '$correo', '$identificacion', '$tipodocumento', '$celular', '$direccion', '$nombrearchivo')";
        $query = mysqli_query($link, $sql);

        $ultimo_id = mysqli_insert_id($link); 

        $carpeta = $ultimo_id;
        $micarpeta = 'fotos/'.$carpeta;
        if(!file_exists($micarpeta))
        {
            mkdir($micarpeta, 0777, true);
        }
    
        if(is_uploaded_file($nombretemporal))
        {
            copy($nombretemporal,$micarpeta."/".$nombrearchivo); //copia el archivo a la carpeta del usuario
        }
        header('location:index.php?flag=6');
    }
    else
    {
        header('location:index.php?flag=7'.$cola);
    }
    
 }

?>