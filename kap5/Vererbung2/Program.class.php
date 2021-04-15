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
        $person = new Person();
        $konto = new Konto();
        $kunde = new Kunde();
        $mitarbeiter = new Mitarbeiter();
        echo "\n****** Alle deklarierten Klassen in dem Kontext ******\n";

        print_r(get_declared_classes());

        echo "\n****** var_dump Objekte ******\n";
        var_dump($konto);
        var_dump($person);
        var_dump($kunde);
        var_dump($mitarbeiter);

        echo "\n****** Typen der Objekte über get_class ******\n";
        echo get_class($konto) . "\n";
        echo get_class($person) . "\n";
        echo get_class($kunde) . "\n";
        echo get_class($mitarbeiter) . "\n";

        echo "\n****** Superklassen der Objekte über get_parent_class ******\n";
        echo get_parent_class($konto) . "\n";
        echo get_parent_class($person) . "\n";
        echo get_parent_class($kunde) . "\n";
        echo get_parent_class($mitarbeiter) . "\n";

        echo "\n****** Variablen in Klassen über get_class_vars ******\n";
        print_r(get_class_vars("Konto"));
        print_r(get_class_vars("Person"));
        print_r(get_class_vars("Kunde"));
        print_r(get_class_vars("Mitarbeiter"));

        echo "\n****** Variablen in Objekten über get_object_vars ******\n";
        print_r(get_object_vars($konto));
        print_r(get_object_vars($person));
        print_r(get_object_vars($kunde));
        print_r(get_object_vars($mitarbeiter));

        echo "\n****** Methoden in Klassen über get_class_methods ******\n";
        var_dump(get_class_methods("Konto"));
        var_dump(get_class_methods("Person"));
        var_dump(get_class_methods("Kunde"));
        var_dump(get_class_methods("Mitarbeiter"));

    }
};
