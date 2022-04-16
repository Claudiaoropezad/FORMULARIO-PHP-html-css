<?php
$cedula=$_GET['cedula'];
$nombre=$_GET['nombre'];
$mensaje=$_GET['mensaje'];
$correo=$_GET['correo'];
echo $cedula.''.$nombre.''.$mensaje.''.$correo;

exit();
echo 'Esto no se mostrará.';
?>