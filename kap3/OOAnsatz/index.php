<?php

class Program
{
	public function __construct(){
		$this -> main();
	}

  private function main(){
    require_once("Konto.class.php");
      require_once("lib/res/kopf.txt");
      $konto1 = new Konto(floatval("1023.34"), "Sparbuch");
	  var_dump($konto1);
      require_once("lib/res/ende.txt");
    }
}
new Program();
?>
