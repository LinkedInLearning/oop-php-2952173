<?php
// Typdeklarationen (Type-Hints) der Parameter bei Funktionen
// Kein Zwang
function sum(int $a, int $b) {
    return $a + $b;
}
// Typzwang bei Rückgabewerten
function multi(int $a, int $b):int {
    return $a * $b;
}
function multi2(int $a, int $b):float {
    return (float)($a * $b);
}

// Problemexperimente
function multi3(int $a, int $b):double {
    return (double)($a * $b);
}

var_dump(sum(1, 2));
var_dump(sum(true, 2));
var_dump(sum("1", 2));

var_dump(multi(21, 2));
var_dump(multi(true, 2));
var_dump(multi("21", 2));

var_dump(multi2(21, 2));
var_dump(multi2(true, 2));
var_dump(multi2("21", 2));
?>