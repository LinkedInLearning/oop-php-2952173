<?php
session_start();
require_once("Kunde.class.php");
require_once("Mitarbeiter.class.php");


class Program
{
	public function __construct(){
		$this -> main();
	}

  private function main(){
      require_once("lib/res/kopf.txt");
      require_once("lib/res/formular.txt");
      if( isset($_POST['betrag']) )
      {
          $konto1 = new Privatkonto(floatval($_SESSION["kntstand"]), "Girokonto");
          $kunde1 = new Kunde("Hans", "Dampf", 42, "Mann", "12345 Irgendwo, Irgendeinestrasse 42", $konto1);
          $meldung = $konto1-> auszahlen(floatval($_POST['betrag']));
          
          
          
          echo "<div id='info'>$meldung </div>";}
      else    {
          $konto1 = new Privatkonto(floatval("1023.34"), "Girokonto");
          $kunde1 = new Kunde("Hans", "Dampf", 42, "Mann", "12345 Irgendwo, Irgendeinestrasse 42", $konto1);
          $meldung = "Aktueller Kontostand: ". $konto1->getKntstand() . " EUR";
          echo "<div id='info'>$meldung </div>";
          
      }
      $_SESSION["kntstand"]=$konto1->getKntstand();
      require_once("lib/res/ende.txt");
  }
}
new Program();
?>
