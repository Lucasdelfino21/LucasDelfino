<?php
require "Persona.php";
$per = new Persona('Lucas', 'Delfino', 21);
$per->mostrarInfo();
echo $per->nombreCompleto();
?>