<?php
// Implizite Typfestlegung durch Ducktyping
$d = 42;     // ein Integer (Ganzzahl)

echo "<hr />" . gettype($d); 
var_dump($d);

// Typumwandlung durch settype
settype($d,"string");
echo "<hr />" . gettype($d); 
var_dump($d);

// Implizite Typfestlegung durch Ducktyping
$d = 42;     // ein Integer (Ganzzahl)

echo "<hr />" . gettype($d); 
var_dump($d);

// Typumwandlung durch Casting-Operator
$d = (string)$d;  
echo "<hr />" . gettype($d); 
var_dump($d);

?>