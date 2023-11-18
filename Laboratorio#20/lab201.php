<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 20</title>
</head>
<body>
    <form action="lab201.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Email: <input type="email" name="email" required><br>
        Edad: <input type="number" name="edad" required><br>
        <input type="submit" name="guargar" value="Guargar datos"><br>
    </form>
<?php 
    include("UsuariosMDB.php");
    $usrs = new UsuariosMDB();

    if(array_key_exists('guardar', $_POST)){
        $usrs->insertarRegistros($_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['email'],$_REQUEST['edad']);
        echo "Registro insertado exitosamente <br><br>";
    }
    echo "Resgistros en la coleccion usuarios: <br>";
    $usrs->obtenerRegistros() 
?>
    
</body> 
</html>