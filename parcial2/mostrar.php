<?php
require "traits.php";
$per = new Persona($_POST['nombrea'], $_POST['apellidoa'], $_POST['edada'], $_POST['materiaa'], $_POST['nombrep'],$_POST['apellidop'],
$_POST['dni'], $_POST['carrera'], $_POST['materiap'], $_POST['edadp']);
$per->mostrarInfoA();
echo $per->nombrecom_alumno();
$per->mostrarInfoP();
echo $per->nombrecom_profesor();
 ?>
