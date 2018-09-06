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

$actividad = $_POST['actividad'];
$min = $_POST['min'];

if($actividad == "dormir"){
    $dcalorias = $min * 1.08;
    echo "La calorias quemadas durante esta actividad son: ".$dcalorias;
}else{
    $scalorias = $min * 1.66;
    echo "La calorias quemadas durante esta actividad son: ".$scalorias;
}
?><br>
<a href="index.html"><button>volver</button></a>
</body>
</html>
