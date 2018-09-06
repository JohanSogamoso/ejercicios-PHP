<?php

class Producto{

    public function registra($conexion, $nombre, $descripcion, $codigo, $valorUni){
        $query = "INSERT INTO producto(nombre, descripcion, codigo, valor_unitario)
        VALUES('$nombre', '$descripcion', '$codigo', $valorUni)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registar";
        }
        return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM producto";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId($conexion, $id){
        $query = "SELECT * FROM producto WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $nombre, $descripcion, $codigo, $valorUni, $id){
        $query = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion',
        codigo = '$codigo', valor_unitario = $valorUni where id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problemaa al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "DELETE FROM producto WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Producto eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;
    }

}