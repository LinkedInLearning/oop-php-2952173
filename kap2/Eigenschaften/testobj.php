<?php
require_once("Kunde.class.php");
require_once("Konto.class.php");
$o1 = new Kunde();
$o2 = new Konto();

var_dump($o1);
echo gettype($o1);

var_dump($o2);
echo gettype($o2);
?>