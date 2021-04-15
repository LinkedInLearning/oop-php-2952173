<?php
declare(strict_types=1);  // Typsicherheit festlegen
// Typdeklarationen (Type-Hints) der Parameter bei Funktionen
// Mit Zwang
function sum(int $a, int $b):int {
    return $a + $b;
    // return ""; // Fehler
}


var_dump(sum(1, 2));
//var_dump(sum(true, 2));  // Fehler
//var_dump(sum("1", 2));  // Fehler

?>