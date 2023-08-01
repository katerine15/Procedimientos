<?php
$carpeta = 2;
$micarpeta = 'fotos/'.$carpeta;
if(!file_exists($micarpeta))
{
    mkdir($micarpeta, 0777, true);
    echo "creada";
}
?>