<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 10.2</title>
</head>
<body>
    <h1>Encuesta. Resultado de la votacion</h1>
    <?php
        require_once("class/votos.php");

        $obj_votos = new votos();
        $result_votos = $obj_votos->listar_votos();

        foreach($result_votos as $result_voto){
            $votos1 = $result_voto['$votos1'];
            $votos2 = $result_voto['$votos2'];
        }
        $totalVotos = $votos1 + $votos2;

        print ("<TR>\n");
        print ("<TH>Respuesta</TH>\n");
        print ("<TH>Votos</TH>\n");
        print ("<TH>Porcentaje</TH>\n");
        print ("<TH>Representacion grafica</TH>\n");
        print ("<TR>\n");

        $porcentaje = round(($votos1/$totalVotos)*100,2);
        print ("<TR>\n");
        print ("<TD class='isquierda'>Si</TD>\n");
        print ("<TD class='derecha'>$votos1</TD>\n");
        print ("<TD class='derecha'>$porcentaje%</TD>\n");
        print ("<TD class='isquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='".
            $porcentaje*4 . "'></TD>\n");
        print ("<TR>\n");
        $porcentaje = round (($votos2/$totalVotos)*100,2);
        print ("<TR>\n");
        print ("<TD class='isquierda'>Si</TD>\n");
        print ("<TD class='derecha'>$votos1</TD>\n");
        print ("<TD class='derecha'>$porcentaje%</TD>\n");
        print ("<TD class='isquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='".
            $porcentaje*4 . "'></TD>\n");
        print ("<TR>\n");

        print("<TRable\n");
        print("<p>Numero total de votos emitidos: $totalVotos </p>\n");
        print("<p><A HREF='lab101.php'>Pagina de votacion</A></p>\n");

    ?>
</body>
</html>