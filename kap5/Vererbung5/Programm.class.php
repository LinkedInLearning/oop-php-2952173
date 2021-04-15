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
        $o1 = new Klasse1(42);
        $o2 = new Klasse2(21,2);
        $o2->test2();
        echo "\n****** var_dump Objekte ******\n";
        var_dump($o1);
        var_dump($o2);

        echo "\n****** Typen der Objekte über get_class ******\n";
        echo get_class($o1) . "\n";
        echo get_class($o2) . "\n";

        echo "\n****** Superklassen der Objekte über get_parent_class ******\n";
        echo get_parent_class($o1) . "\n";
        echo get_parent_class($o2) . "\n";

        echo "\n****** Methoden in Klassen über get_class_methods ******\n";
        var_dump(get_class_methods("Klasse1"));
        var_dump(get_class_methods("Klasse2"));

    }
};
