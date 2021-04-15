<?php
require_once("Person.class.php");
class Mitarbeiter extends Person
{
  private int $pnr = 0;
 
  public function __construct(string $vname, string $nname, int $alter, string $geschlecht, string $adresse, int $pnr) {
	  parent :: __construct($vname, $nname, $alter, $geschlecht, $adresse);
  
  $this -> setPnr($pnr);
  }
  
      public function setPnr(string $pnr){
    $this -> pnr = $pnr;
  }
  public function getPnr(): string{
    return $this -> pnr;
  }
    public function kontaktwunsch(){
	  return "<hr />Notwendiger Kontakt zum Kunden.<br />";
	  $this -> kommunizieren("Kontakt zwischen Mitarbeiter und Kunde.");
	

  }
}
?>
