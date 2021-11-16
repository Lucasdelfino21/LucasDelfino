<?php
trait funciones{
  public function cuenta($cuenta, $monto){
    $this->cuenta=$cuenta;
    if($cuenta ==  "cc"){
      $monto = $monto*0.79;
      echo "Se le descuenta el iva ya que es cuenta corriente: ".$monto."<br>";
    }
    else if($cuenta == "ca") {
      $monto = $monto*0.90;
      echo "Se le descuenta el 10% ya que es caja de ahorro: ".$monto."<br>";
    }
    else{
      echo "Ningun tipo de cuenta seleccionado <br>";
    }
  }

  public function acreditar($monto){
    if($monto >= 10000){
      $monto = $monto*1.21;
      echo "Se le suma el 21%: ".$monto."<br>";
    }
    else {
      echo "No se le suma el 21%: ".$monto."<br>";
    }
  }

  public function fecha(){
    echo "Fecha del deposito: ".date("Y/m/d")."<br>";
  }


}
 ?>
