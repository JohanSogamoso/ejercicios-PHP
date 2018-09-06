<?php

include './EmpleadoComision.php';


$objEmpleado = new Empleado("Juan","Perez", 200000);

echo $objEmpleado->getNombre()."<br>";


$objEmpleadoComision = new EmpleadoComision("Juan", "Perez", 200000, 1.00);

$objEmpleadoComision->sumarVentas(5);

echo 'Nombre: '.$objEmpleadoComision->getNombre().'<br>';
echo 'Apellido: '.$objEmpleadoComision->getApellido().'<br>';
echo 'Pago Base: '.$objEmpleadoComision->getSalario().'<br>';
echo 'Pago Total: '.$objEmpleadoComision->calcularPago();