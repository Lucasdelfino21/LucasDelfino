<?php
trait funciones{
    public function diferencia_edad(){

    }

    public function materia(){

    }

    public function nacimiento(){

    }
}

class persona{
  public $nombre;
  public $apellido;
  public $edad;

    public function __construct($nombrea, $apellidoa, $edada, $materiaa, $nombrep, $apellidop, $dni, $carrera, $materiap, $edadp){
      $this->nombrea = $nombrea;
      $this->apellidoa = $apellidoa;
      $this->edada = $edada;
      $this->materiaa = $materiaa;
      $this->nombrep = $nombrep;
      $this->apellidop = $apellidop;
      $this->dni = $dni;
      $this->carrera = $carrera;
      $this->materiap = $materiap;
      $this->edadp = $edadp;
      }

    public function mostrarInfoA(){
      $info = "<h1>Informacion del alumno</h1>";
      $info .= "Nombre: ". $this->nombrea."<br>";
      $info .= "Apellido: ". $this->apellidoa."<br>";
      $info .= "Edad: ". $this->edada."<br>";
      $info .= "Materia: ". $this->materiaa."<br>";
      echo $info;
    }

    public function mostrarInfoP(){
      $info = "<h1>Informacion del profesor</h1>";
      $info .= "Nombre: ". $this->nombrep."<br>";
      $info .= "Apellido: ". $this->apellidop."<br>";
      $info .= "Edad: ". $this->edadp."<br>";
      $info .= "DNI: ". $this->dni."<br>";
      $info .= "Carrera: ". $this->carrera."<br>";
      $info .= "Materia: ". $this->materiap."<br>";
      echo $info;
    }

    public function nombrecom_alumno(){
        echo "El nombre completo es ".$this->nombrea." ".$this->apellidoa."<br>" ;
    }

    public function nombrecom_profesor(){
        echo "El nombre completo es ".$this->nombrep." ".$this->apellidop."<br>" ;
    }
  }

  //$aux = new persona;
  //$aux->diferencia_edad();


 ?>
