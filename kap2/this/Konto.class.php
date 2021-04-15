<?php

class Konto
{
  public float $kontostand = 0;
  
  public function einzahlen(float $betrag){
    $this->kontostand += $betrag;
  }

  public function auszahlen(float $betrag){
 
  }

}
?>
