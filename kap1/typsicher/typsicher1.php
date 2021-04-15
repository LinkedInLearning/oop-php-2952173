<?php
// Implizite Typfestlegung durch Ducktyping
$a = true;   // ein Boolean (Wahrheitswert)
$b  = "Arthur";  // eine Zeichenkette (String)
$c = 'Dent';  // eine Zeichenkette (String)
$d = 42;     // ein Integer (Ganzzahl)
$e = null;    // NULL-Typ
$f = 3.14;   // ein Double/Float (Fließkommazahl) 
$g = array(); // Array-Typ als Vertreter von zusammengesetzten Typen

echo "<hr />" . gettype($a); 
var_dump($a);
echo "<hr />" . gettype($b); 
var_dump($b);
echo "<hr />" . gettype($c); 
var_dump($c);
echo "<hr />" . gettype($d); 
var_dump($d);
echo "<hr />" . gettype($e); 
var_dump($e);
echo "<hr />" . gettype($f); 
var_dump($f);
echo "<hr />" . gettype($g); 
var_dump($g);
?>