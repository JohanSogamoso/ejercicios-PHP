<?php

class Empleado{

    private $nombre;
    private $apellido;
    private $salario;
    
    function __construct($nombre, $apellido, $salario){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->salario = $salario;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    
    public function getSalario(){
        return $this->salario;
    }
}