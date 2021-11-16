<?php
include("config.php");
$dni = $_POST['dni'];

$result = mysqli_fetch_array(mysqli_query($mysqli,"SELECT persona.nombre, persona.apellido, persona.fec_nac AS edad FROM persona WHERE dni=$dni" ));




if(is_array($result)){
    echo json_encode($result);
}else{
    echo json_encode("error");
}
?>
