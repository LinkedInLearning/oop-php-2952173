<?php
require_once("Konto.class.php");
$o1 = new Konto(0,"Sparbuch");
$o2 = $o1;
$o1->einzahlen(100);
//echo $o1->getKontostand();
echo $o2->getKontostand();
$o3 = clone $o1;
echo $o3->getKontostand();
$o1->einzahlen(100);
echo "\n". $o1->getKontostand();
echo "\n".$o3->getKontostand();

?>