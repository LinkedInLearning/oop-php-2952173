<?php

class Konto
{
  private $kontostand;
  private $kontoart;
  public function __construct(float $kontostand, string $kontoart) {
    $this -> kontostand = $kontostand;
    $this -> setKontoart($kontoart);
}
	function __destruct() {
		echo "\nObjekt mit dem Kontostand " . $this -> kontostand ." wird gel&ouml;scht...";
	}
  public function __clone() {
			$this -> kontostand = $this -> kontostand + 100;
	}
  public function einzahlen(float $betrag){
    $this -> kontostand += $betrag;
  }

  public function auszahlen(float $betrag){
      $this ->kontostand -= $betrag;
  }

  public function setKontoart(string $kontoart){
    $this -> kontoart = $kontoart;
  }
  public function getKontoart(): string{
    return $this -> kontoart;
  }
    public function getKontostand(): float{
    return $this -> kontostand;
  }

}
?>
