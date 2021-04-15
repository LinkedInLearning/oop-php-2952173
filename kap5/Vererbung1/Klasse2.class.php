<?php
require_once "Klasse1.class.php";
class Klasse2 extends Klasse1
{
    public int $b = 1;
    public function test2(){
        echo "Klasse2\n";
    }
 
}
?>
