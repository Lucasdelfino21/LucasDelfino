<?php
require "Interface.php";

class Transporte implements Automovil{
  public function getColor(){
    echo "azul ";
  }
  public function getRuedas(){
    echo "abc ";
  }
};

$transporte = new transporte();
$transporte->getColor();
$transporte->getRuedas();

 ?>
