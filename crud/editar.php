<?php
include 'clases/conexion.php';
include 'clases/usuario.php';

$objConexion = new Conexion();
$objUsuario = new Usuario();

$conexion = $objConexion->conectar();
$datos = $objUsuario->consultaId($conexion, $_GET['id']);

$nombre;
$apellido;
$documento;
$fechaNacimiento;

while($dato = mysqli_fetch_array($datos)){
    $id = $dato['id'];
    $nombre = $dato['nombre'];
    $apellido = $dato['apellido'];
    $documento = $dato['documento'];
    $fechaNacimiento = $dato['fecha_nacimiento'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form action="controlador/editar.php" method="post">
         <input type="hidden" name="id" value="<?php echo $id; ?>">    
        <label for="">Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
        <label for="">Apellido: </label><input type="text" name="apellido" value="<?php echo $apellido; ?>"><br>
        <label for="">Documento: </label><input type="text" name="documento" value="<?php echo $documento; ?>"><br>
        <label for="">Fecha Nacimiento: </label><input type="text" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>"><br>
        <input type="submit" value="Actualizar">
    </form><br>
    <a href="consultar.php">Volver</a>
</body>
</html>
