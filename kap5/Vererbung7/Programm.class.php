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
        $o2 = new Klasse2(1);
        $o2->test();
        
    }
};
