<?php

trait despedir{
  function decirchau(){
    echo "chau ";
  }
}

trait saludar{
  abstract public function getName();
  function decirhola(){
    echo "hola ";
  }
}


class comunicar{
  public function getName(){}
  use saludar, despedir;
}

$aux = new comunicar;

$aux->decirhola();
$aux->decirchau();

?>
