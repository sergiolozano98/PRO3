<?php
/**
 *
 */
class gym
{
  //creamos el array vacio
  private $personas=[];
//funcion para almacenar las personas
  public function almacenar($persona){
    if ($persona>0) {
        $this->personas[]=$persona;
    }
    }
//funcion para calcular el num de personas
  public function numpersonas(){
    $total=0;
    foreach ($this->personas as $key => $value) {
    $total=$total+$value;
    }
    return $total;
  }
  //funcion que calcular la media
  public function MediaPersonas(){
    $total=0;
    foreach ($this->personas as $key => $value) {
    $total=$total+$value;
    }
    return $total/count($this->personas);
  }
}




 ?>
