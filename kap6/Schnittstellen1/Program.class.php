<?php
new class
{
    public function __construct()
    {
		require_once ("Person.class.php"); 
		echo Person::VORNAME. " " . Metainfos::NACHNAME."\n"; 
		$mensch = new Person(); 
		$mensch -> chatten(); 
		$mensch -> telefonieren(); 
	} 
} ; 
?> 
