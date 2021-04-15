<?php
require_once("Konto.class.php");
$o1 = new Konto(0,"Sparbuch");
$o2 = new Konto(0,"Sparbuch");
$o1->einzahlen(100);
echo $o2->getKontostand();


?>