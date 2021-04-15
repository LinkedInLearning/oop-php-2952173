<?php

class Klasse1
{
   public int $a;
   public function __construct(int $a){
       $this->a = $a;

   }
   public final function test(){
       echo "Klasse1\n";
   }

}
?>
