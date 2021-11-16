<?php
require_once "Persona.php";
require_once "Funciones.php";

class cliente extends persona{
  use funciones;
  public $n_cliente;
  public function asignar($n_cliente){
    $this->n_cliente=$n_cliente;
  }

  public function mostrar_info(){
    echo "El apellido es: ".$this->apellido."<br>";
    echo "El numero de cliente es: ".$this->n_cliente."<br>";
  }
}

 ?>
