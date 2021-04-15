<?php
require_once("Konto.class.php");
$o1 = new Konto();
$o1->einzahlen(2);
echo $o1->kontostand;

?>