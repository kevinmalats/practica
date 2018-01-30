<?php
session_start();

$nombre = $_POST['Nombre'];
$apellido =$_POST['Apellido'];
$_SESSION["nombre"]=$nombre;
echo "usuario " .$nombre ;
echo "<a href= 'index.php'>Regresar</a>";
echo "<a href= 'logout.php'>Logout</a>";
?>
