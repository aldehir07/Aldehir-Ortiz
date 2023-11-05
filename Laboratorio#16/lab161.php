<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 16.1</title>
</head>
<body>
    <h1>Consulta de servicio Web de Conversion de Temperatura</h1>
    <form name="FormConv" method="post" action="lab161.php">
        <br/>
        Convertir desde <select name="temp">
            <option value="CtoF" selected> °C a °F
            <option value="FtoC">°F a °C
        </select> el valor
        <input type="number" name="valor" step="Any" required>
        <input name="Covertir" value="Convertir" type="submit">
    </form>
    <?php 
    $servicio="http://www.w3schools.com/xml/tempcovert.asmx?wsdl";
    $parametros=array();
    if(array_key_exists('Covertir', $_POST)){
        $valor=$_POST['valor'];
        $temp=$_POST['temp'];

        if($temp=="CtoF"){
            $parametros['Celsius']=$valor;
            $cliente=new SoapClient($servicio, $parametros);
            $resultObj=$cliente->CelsiusToFahrenheit($parametros);
            $resultado = $resultObj->CelsiusToFahrenheitResult;
        }else{
            $parametros['Fahrenheit']=$valor;
            $cliente=new SoapClient($servicio, $parametros);
            $resultObj=$cliente->FahrenheitToCelsius($parametros);
            $resultado = $resultObj->FahrenheitToCelsiusResult;
        }
        print("<BR>La temperatura $valor".substr($temp,0,1)." es igual a :
                                            $resultado".substr($temp,3,1));
    }
    ?>
</body>
</html>