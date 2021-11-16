<?php
include("config.php");

$consulta = mysqli_query($mysqli, "SELECT provincia FROM provincias");
$provincias = array();

while($fila = mysqli_fetch_assoc($consulta)){
    $provincias[] = $fila;
}

echo json_encode($provincias);

?>