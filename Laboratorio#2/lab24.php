<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Creacion del arreglo array("clave => "valor)
    $personas = array("juan" => "Panama",
                      "john" => "USA",
                      "eica" => "finlandia",
                      "kusanagi" => "japon");
//Recorrer todo el arrglo
foreach($personas as $persona => $pais){
    print "$persona es de $pais<br>";
}

//Impresion especifica
echo "<br>".$personas["juan"];
echo "<br>".$personas["eica"];
?>
</body>
</html>