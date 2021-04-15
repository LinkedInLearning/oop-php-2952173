<?php
function my_autoloader($class){
    require_once $class .".class.php";
}
new class 
{

    public function __construct()
    {
        spl_autoload_register("my_autoloader");
        $this->main();
    }

    private function main()
    {
       // require_once("Konto.class.php");
        $konto1 = new Konto(floatval("1023.34"), "Sparbuch");
        var_dump($konto1);

    }
};

?>
