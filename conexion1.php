<?php
  $conn = new mysqli("localhost", "root", "", "bdd");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
else {
    echo "Conexion no establecida";
}
?>