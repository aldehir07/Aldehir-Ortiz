<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12</title>
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 1: se crea la variable de secion y se almacena</h2>
    <?php
        $var = "Ejemplo Sesiones";
        $_SESSION['var'] = $var;
        print ("<P>Valor de la ariable de sesion: $var</P>\n");
    ?>
    <a href="lab122.php">Paso 2</a>
</body>
</html>