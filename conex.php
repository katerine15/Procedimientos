<?php
function Conectarse()  /*es una funcion que se conecta a la base sde datos */
{
$servername = "localhost";
$database = "procedimiento";
$username = "ADSO23";
$password = "ADSO23";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn)
{
    die("Error de Conexión: " . mysqli_connect_error());
}
else
{
   
    return $conn;
}
   
}

?>