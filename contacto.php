<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilos.css">
<title>Formulario de Contacto</title>
</head>
<?php include("header.php"); ?>
<body>

<h1>Formulario de Contacto</h1>

<form action="enviar_consulta.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre" required><br><br>

  <label for="apellido">Apellido:</label><br>
  <input type="text" id="apellido" name="apellido" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="consulta">Consulta:</label><br>
  <textarea id="consulta" name="consulta" rows="4" cols="50" required></textarea><br><br>

  <button type="submit">Enviar</button>
</form>

</body>
<?php
if(isset($_GET["ok"])){
    echo "<p>Consulta enviada correctamente </p>";
}
?>

<?php include("footer.php")?>
</html>
