<?php
require "Interface.php";
class Persona implements datos{
    public $nombre;
    public $apellido;
    public $edad;

    public function getColorFavorito(){

    }

    public function getCancionFavorita(){

    }

    public function nombreCompleto(){
      return $this->nombre;
    }

    public function mayorEdad(){

    }

    public function __construct($nombre, $apellido, $edad){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->edad = $edad;
    }

    public function mostrarInfo(){
      $info = "<h1>Informacion de la persona</h1>";
      $info .= "Nombre: ". $this->nombre."<br>";
      $info .= "Apellido: ". $this->apellido."<br>";
      $info .= "Edad: ". $this->edad;
      echo $info;
    }

    }
