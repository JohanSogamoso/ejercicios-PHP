<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new Conexion();
$objProducto = new Producto();

$conexion = $objConexion->conectar();
echo $objProducto->registra($conexion, $_POST['nombre'], $_POST['descripcion'],
$_POST['codigo'], $_POST['valorUnitario']);
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
    <a href="../index.html">Volver</a>
</body>
</html>