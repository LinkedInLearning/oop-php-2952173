<?php
require_once("Kunde.class.php");
require_once("Konto.class.php");
$o1 = new Kunde();
$o2 = new Konto();
$o1->vname="Gunther";
$o2->einzahlen(2);
?>