<?php

class Klasse2 extends Klasse1
{
    public int $b;
    public function __construct(int $a,int $b){
        parent::__construct($a);
        $this->b = $b;
 
    }
    public function test2(){
        echo "Klasse2\n" . $this->b . ", " . $this->a;
    }
 
}
?>
