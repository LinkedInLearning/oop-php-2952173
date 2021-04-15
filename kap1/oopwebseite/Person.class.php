<?php

class Person
{
  private string $vname = "";
  private string $nname = "";
  private int $alter = 0;
  private string $geschlecht = "";
  private string $adresse = "";
 
  public function __construct(string $vname, string $nname, int $alter, string $geschlecht, string $adresse) {
  $this -> setVname($vname);
  $this -> setNname($nname);
  $this -> setAlter($alter);
  $this -> setGeschlecht($geschlecht);
  $this -> setAdresse($adresse);
  }
  
    public function setVname(string $vname){
    $this -> vname = $vname;
  }
  public function getVname(): string{
    return $this -> vname;
  }

    public function setNname(string $nname){
    $this -> nname = $nname;
  }
  public function getNname(): string{
    return $this -> nname;
  }
      public function setAlter(int $alter){
    $this -> alter = $alter;
  }
  public function getAlter(): int{
    return $this -> alter;
  }
      public function setGeschlecht(string $geschlecht){
    $this -> geschlecht = $geschlecht;
  }
  public function getGeschlecht(): string{
    return $this -> geschlecht;
  }
      public function setAdresse(string $adresse){
    $this -> adresse = $adresse;
  }
  public function getAdresse(): string{
    return $this -> adresse;
  }

 protected function kommunizieren($wie){
    return "<hr />$wie<hr />";
  }
}
?>
