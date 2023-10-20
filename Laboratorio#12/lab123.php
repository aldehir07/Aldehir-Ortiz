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
<?php 
    if(isset($_SESSION['var'])){
        $var = $_SESSION['var'];
    }else{
        $var = "";
    }
    print("<P>Varlo de la variable de sesion: $var</P>\n");
    session_destroy();
?>
<a HREF="lab121.php">Volver al paso 1</A>
</body>
</html>