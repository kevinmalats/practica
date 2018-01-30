<?php
session_start();
$nombre = $_POST['Nombre'];
$apellido =$_POST['Apellido'];

echo "usuario" .$nombre , "apellido" .$apellido;
?>
