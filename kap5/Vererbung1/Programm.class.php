<?php

new class 
{
    public function __construct()
    {
        $this->main();
    }

    private function main()
    {
        require_once "Klasse2.class.php";
        $o1 = new Klasse2();
        var_dump($o1);

    }
};

?>
