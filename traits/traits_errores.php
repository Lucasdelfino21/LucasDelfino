<?php
trait futbol{
  function patear(){
    echo "pateaste la pelota de futbol";
  }
}

trait basquet{
  function patear(){
    echo "pateaste la pelota de basquet";
  }
}

class deportes{
  use basquet, futbol{
    futbol::patear insteadof basquet;
  }
}

$aux = new deportes;
$aux->patear();

 ?>
