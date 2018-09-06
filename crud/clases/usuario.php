<?php

class Usuario{

    public function registrar($conexion, $nombre, $apellido, $documento, $fechaNacimiento){
        $query = "INSERT INTO usuario(nombre, apellido, documento, fecha_nacimiento)
        VALUES ('$nombre', '$apellido', $documento, '$fechaNacimiento');";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registar";
        }

        return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM usuario;";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId($conexion, $id){
        $query = "SELECT * FROM usuario WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $nombre, $apellido, $documento, $fechaNacimiento, $id){
        $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido',
        documento = $documento, fecha_nacimiento ='$fechaNacimiento' where id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problemaa al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "DELETE FROM usuario WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;
    }

}