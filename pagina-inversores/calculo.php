<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    $ivn1 = $_POST['inv1'];
    $ivn2 = $_POST['inv2'];
    $ivn3 = $_POST['inv3'];

    $total = $ivn1 + $ivn2 + $ivn3;
    
    $porcentaje1 = $ivn1 * 100 / $total;
    $porcentaje2 = $ivn2 * 100 / $total;
    $porcentaje3 = $ivn3 * 100 / $total;

    echo "El porcentaje del primer inversor es: ".$porcentaje1."%<br>";
    echo "El porcentaje del segundo inversor es: ".$porcentaje2."%<br>";
    echo "El porcentaje del tercer inversor es: ".$porcentaje3."%<br>";
    ?><br>
    <a href="index.html"><button>volver</button></a>
</body>
</html>