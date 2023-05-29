<?php
$conexion = new mysqli("localhost","prueba","","bdd");
if ($conexion){
    echo "Conexion Establecida";
}
else {
    echo "Conexion no establecida";
}
?>

