<?php
class Person {
  public static $vorname = "Arthur";
  public static string $name = "Dent";
  public const WOHNORT = "Magrathea";
  public string $ausstattung = "Handtuch";
  public static function fragen(){
    echo "\nWas macht die Maus da?";
  }
  public static function antworten(int $wert){
    echo "\nDie Antwort ist $wert.";
  }
}
?>
