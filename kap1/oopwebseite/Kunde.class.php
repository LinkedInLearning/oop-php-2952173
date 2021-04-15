<?php
require_once("Person.class.php");
require_once("Privatkonto.class.php");
require_once("Geschaeftskonto.class.php");
 
class Kunde extends Person
{
  private Konto $konto;

   public function __construct(string $vname, string $nname, int $alter, string $geschlecht, string $adresse, Konto $konto) {
    parent :: __construct($vname, $nname, $alter, $geschlecht, $adresse);
 
    $this -> konto = $konto;
  }
  
  public function getKonto(): Konto{
    return $this -> konto;
  }


    public function geschaeftsvorfall(){
	  return "Bisheriger Kontostand: " . $this -> getKonto() -> getKntstand() . " EUR.<br />";
	  $this -> kommunizieren("Kontakt zwischen Kunde und Mitarbeiter.");
	  $this -> konto ->auszahlen(100);
	  return "Neuer Kontostand: " . $this -> konto ->getKntstand() . " EUR.<br />";

  }
}
?>
