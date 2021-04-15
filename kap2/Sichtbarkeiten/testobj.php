<?php
require_once("Konto.class.php");
$o1 = new Konto();
$o1->kontoart="Test";
$o1->auszahlen(2);

?>