<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconectar</title>
</head>
<body>
<?php 
    if(isset($_SESSION["usuario_valido"])){
        session_destroy();
        print ("<br> <br><p align='CENTER'>Conexion finalizada</p>\n"); 
        print ("<p align='CENTER>[<a href='login.php'>Conectar</a>]</p>\n");
    }else{
        print ("<br><br>\n");
        print ("<p align='CENTER'>No existe una conexion activa</p>\n");
        print ("<p align='CENTER>[<a href='login.php'>Conectar</a>]</p>\n");
    }
?>
</body>
</html>