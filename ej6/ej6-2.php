<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$fnacimiento = $_POST["fnacimiento"];
$provincia = $_POST["provincia"];
$email = $_POST["email"];
$donante = $_POST["donante"];

echo "El nombre es: ", $nombre, "</br>";
echo "El apellido es: ", $apellido, "</br>";
echo "El dni es: ", $dni, "</br>";
echo "La fecha de nacimiento es: ", $fnacimiento, "</br>";
echo "El email es: ", $email, "</br>";
echo "Su provincia es: ", $provincia, "</br>";
echo $donante;
?>