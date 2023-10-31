<?php
if(array_key_exists('enviar',$_POST)){
    include('class_lib.php');

    $diam = $_POST['diam'];
    $altu = $_POST['altu'];

    $cil = new Cilindro($diam, $altu);

    $volumen=$cil->calc_volumen();
    $area=$cil->calc_area();

    echo "<br/> El volumen del cilindro es de ".$volumen . "metros cubicos";
    echo "<br/> El area del cilindro es de ".$area . "metros cuadrados";
}
else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form name="formularioDatos" method="post" action="lab77.php">
        <p>CALCULO DE VOLUMEN Y AREA DE UN CILINDRO</p>
        <br/>
        Introduzca el diametro en metros: <input type="text" value="" name="diam">
        <br/><br/>
        Introduzca la altura en metros: <input type="text" value="" name="altu">
        <br/><br/>
        <input type="submit" value="Calcular" name="enviar">
        </form>
    </body>
    </html>
<?php
}
?>