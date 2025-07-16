<?php
$nombre_form = $_POST ["nombre"];
$apellido_form = $_POST ["apellido"];
$email_form = $_POST ["email"];
$consulta_form = $_POST ["consulta"];


$conexion = mysqli_connect("sql203.infinityfree.com", "if0_39245086","sQcq5PDJQPJu","if0_39245086_php_wordpress") 
or exit ("Error de conexion a la base de datos");


mysqli_query($conexion, "INSERT INTO consultas (nombre, apellido, email, consulta) 
  VALUES ('$nombre_form', '$apellido_form', '$email_form', '$consulta_form')
");

mysqli_close($conexion);

header("Location: contacto.php?ok")


?>

