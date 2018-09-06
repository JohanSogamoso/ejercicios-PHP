<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new Conexion();
$objUsuario = new Usuario();

$conexion = $objConexion->conectar();
echo $objUsuario->eliminar($conexion, $_GET['id']);
?><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="../consultar.php">Volver</a>
</body>
</html>