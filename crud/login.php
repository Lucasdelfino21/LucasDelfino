<?php
include_once("config.php");

if(!$mysqli){
    die("No hay conexion: ".mysqli_connect_error());
}
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

$query = mysqli_query($mysqli,"SELECT * FROM login WHERE usuario = '".$usuario."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    echo "Bienvenido: ".$usuario;
}
else if($nr == 0){
    echo "Usuario incorrecto";
}

?>