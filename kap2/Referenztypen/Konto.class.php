<?php

class Konto
{
  private float $kontostand = 0;
  private string $kontoart = "";
  
  public function einzahlen(float $betrag){
    $this->kontostand += $betrag;
  }

  public function auszahlen(float $betrag){
    $this->kontostand -= $betrag;
  }

  public function getKontostand():float{
    return $this->kontostand;

  }
  public function getKontoart():string{
    return $this->kontoart;

  }

  public function setKontoart(string $kontoart){
    $this->kontoart= $kontoart;
  }

}
?>
