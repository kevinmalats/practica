<?php
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.

$dir_subida = "/var/www/html/practica/imagenes/";
$fichero_subido = $dir_subida.basename($_FILES['archivo']['name']."");
echo basename($_FILES['fichero_usuario']['name']);
echo '<pre>';
 if(is_uploaded_file($_FILES['archivo']['tmp_name'])) {
 	copy($_FILES['archivo']['tmp_name'], $fichero_subido);
                             
                                echo "<b>Subida correcta!. Datos:</b><br>"; 
                            
  
    }else
    print_r($_FILES);
    print_r($_FILES['error']);

//if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
//copy($_FILES['archivo']['tmp_name'], '/var/www/html/practica/imagenes/'.$_FILES['archivo']['name'].'');
//}
?>