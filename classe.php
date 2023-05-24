<?php
class Circulo{
  private $raio=0;
  private $area=0;
  
  function__construct($raio){
    $this->raio=$raio;
    $this->area=3.14*$raio*$raio;
  }
  public function mostraArea(){
    echo $this->area;
  }
}

$circulo = newCirculo(8);
$circulo->mostraArea();
