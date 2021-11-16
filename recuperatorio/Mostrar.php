<?php
require_once "Cliente.php";
require_once "Empleado.php";

$cliente = new cliente($apellido = $_POST['apellido'],
$nombre = $_POST['nombre'],
$edad = $_POST['edad'],
$n_cliente = $_POST['n_cliente'],
$monto = $_POST['monto'],
$cuenta = $_POST['cuenta']);

$cliente->asignar($n_cliente);
$cliente->mostrar_info();
$cliente->cuenta($cuenta, $monto);
$cliente->fecha();
$cliente->acreditar($monto);
 ?>
