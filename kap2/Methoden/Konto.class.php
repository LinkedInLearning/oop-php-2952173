<?php
class Konto{
    public string $kontoart;
    public float $kontostand = 0;
    function einzahlen(float $wert){
        $kontostand += $wert;
        

    }
  

}
?>