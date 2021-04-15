<?php

class Kunde extends Person
{
  private $konto = null;

   public function __construct(string $vname, string $nname, int $alter, 
   string $geschlecht, Adresse $adresse, Konto $konto) {
    parent :: __construct($vname, $nname, $alter, $geschlecht, $adresse);
  //  parent :: __construct();
    $this -> konto = $konto;
  }
  
  public function getKonto(): Konto{
    return $this -> konto;
  }

  public function __destruct() {
		echo "\nObjekt mit der Superklasse " . get_parent_class($this) ." wird gel&ouml;scht...";
  }

}
?>
