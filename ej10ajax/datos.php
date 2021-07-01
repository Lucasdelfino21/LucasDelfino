<?php
    $pais= $_GET['pais'];
    $prarg = array("Buenos Aires","Catamarca","Chaco","Chubut","Cordoba","Corrientes","Entre Rios","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones","Neuquen","Rio Negro","Salta","San Juan","San Luis","Santa Cruz","Santa Fe","Santiago del Estero","Tierra del Fuego","Tucuman");
    $dptouru = array("Artigas","Canelones","Cerro Largo","Colonia","Durazno", "Durazno","Florida","Lavalleja","Maldonado","Montevideo","Paysandu","Rio Negro","Rivera","Rocha","Salto","San Jose","Soriano", "Tacuarembo","Treinta y Tres");
    if ($pais=="Argentina") {
        echo json_encode($prarg);
    }else {
        echo json_encode($dptouru);
    }
?>