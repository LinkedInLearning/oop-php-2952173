<?php

class Mitarbeiter extends Person
{
  private $personalnr;
 
  public function __construct(string $vname, string $nname, 
  int $alter, string $geschlecht, Adresse $adresse, int $personalnr) {

    parent :: __construct($vname, $nname, $alter, $geschlecht, $adresse);
    $this -> setPersonalnr($personalnr);  
  
  }
  
      public function setPersonalnr(string $personalnr){
    $this -> personalnr = $personalnr;
  }
  public function getPersonalnr(): string{
    return $this -> personalnr;
  }

  public function __destruct() {
		echo "\nObjekt mit der Superklasse " . get_parent_class($this) ." wird gel&ouml;scht...";
  }

}
?>
