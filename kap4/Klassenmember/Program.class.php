<?php
new class 
{
	public function __construct(){
		$this -> main();
	}
  public function main(){
	  require_once("Person.class.php");
	  echo "Es berichtet " . Person :: $vorname ." " .
	  Person :: $name . ", live aus " . Person ::WOHNORT.".";
	  Person :: fragen();

	  Person :: antworten(42);
	  $p = new Person();
	  echo "\nHalten Sie das " . $p -> ausstattung . " trocken.";
  }
}
?>
