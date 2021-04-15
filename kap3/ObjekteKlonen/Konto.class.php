<?php

class Konto
{
  private float $kontostand;
  private string $kontoart;
  public function __construct(float $kontostand, string $kontoart){
    $this->kontostand = $kontostand;
    $this->setKontoart($kontoart);
    //echo "Objekt wird erzeugt";

  }
  public function __destruct(){
    //echo "Objekt wird beseitigt";

  }

  public function __clone(){
    $this->kontostand = $this->kontostand + 1;
  }
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
