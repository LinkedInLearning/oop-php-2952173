<?php
function my_autoloader($class)
{
    require_once $class . ".class.php";
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
        $konto1 = new Konto(floatval("-47.11"), "Galaktisches Girokonto");
        var_dump($konto1);
        $kunde1 = new Kunde("Arthur", "Dent", 42, "Mann", 
        new Adresse("Herz aus Gold", "12345", "Milchstrasse", "42"), $konto1);
        var_dump($kunde1);
        $mitarbeiter1 = new Mitarbeiter("Ford", "Perfect", 142, "Mann", 
        new Adresse("Herz aus Gold", "12345", "Milchstrasse", "42"), 007);
        var_dump($mitarbeiter1);
        print_r($mitarbeiter1->getAdresse());
    }
};
