<?php 
require_once ("Metainfos.interface.php"); 
require_once ("Verhaltensweisen.interface.php"); 
class Person implements Metainfos, 
	Verhaltensweisen { 
	public function telefonieren(){
		echo "Mit einer anderen Person telefonieren.\n";
	}
	public function chatten(){
		echo "Mit einer Person chatten.\n";
	} 
} 
?> 
