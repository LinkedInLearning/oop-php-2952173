<?php

class Klasse2 extends Klasse1
{
    public int $a;
    public function __construct(int $a){
        $this->a = $a;
 
    }
    public function test(){
        echo "Klasse2\n";
        echo $this->a."\n";
    }
}
?>
