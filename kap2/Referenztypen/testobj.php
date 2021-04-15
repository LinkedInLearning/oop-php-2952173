<?php
require_once("Konto.class.php");
require_once("Kunde.class.php");
require_once("Adresse.class.php");

$o1 = new Kunde();
$o1->setAdresse(new Adresse());


?>