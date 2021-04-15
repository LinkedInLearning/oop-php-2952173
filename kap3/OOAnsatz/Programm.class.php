<?php

class Program
{
    public function __construct()
    {
        $this->main();
    }

    private function main()
    {
        require_once "Konto.class.php";
        $konto1 = new Konto(floatval("1023.34"), "Sparbuch");
        var_dump($konto1);

    }
}
new Program();
?>