<?php
require 'Vehiculo.php';
$Auto = new Vehiculo();
$Moto = new Moto();
$Coche = new Coche(2010, 'rojo', 250);

$Auto -> estado();
$Auto -> encender();

$Moto -> estado();
$Moto -> encender();

$Coche -> getColor();
$Coche -> mostrarInfo();