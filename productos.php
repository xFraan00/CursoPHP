<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include("header.php"); ?>

    <main>
        <h1>Productos Disponibles</h1>
        <ul>
            <li><a href="productos.php?producto=er">Elden Ring</a></li>
            <li><a href="productos.php?producto=hk">Hollow Knight</a></li>
            <li><a href="productos.php?producto=gta">GTA</a></li>
        </ul>

        <?php
        if (isset($_GET["producto"])) {
            switch ($_GET["producto"]) {
                case "er":
                    $nombre = "Elden Ring";
                    $description = "Elden Ring es un juego de rol de acción...";
                    $precio = "$60";
                    $img = "eldenring.jpeg";
                    break;
                case "hk":
                    $nombre = "Hollow Knight";
                    $description = "Hollow Knight es un juego de aventuras...";
                    $precio = "$20";
                    $img = "hollowknight.jpg";
                    break;
                case "gta":
                    $nombre = "GTA V";
                    $description = "Grand Theft Auto V es un juego de acción...";
                    $precio = "$30";
                    $img = "gta.jpg";
                    break;
                default:
                    $nombre = "Producto no encontrado";
                    $description = "El producto seleccionado no existe.";
                    $precio = "-";
                    $img = "";
                    break;
            }

            echo "<div>
            <h2>$nombre</h2>
            <p>$description</p>
            <p><strong>Precio:</strong> $precio</p>";
            if ($img) {
                echo "<img src='img/$img' alt='$nombre' width='300'>";
            }
            echo "</div>";
        }

        ?>
    </main>

    <?php include("footer.php"); ?>
</body>

</html>