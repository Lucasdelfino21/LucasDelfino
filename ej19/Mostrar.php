<?php
    require 'Coche.php';
    $auto = new Coche(2010, 'rojo', 250);
    $auto->mostrarInfo();
    echo $auto->getColor();