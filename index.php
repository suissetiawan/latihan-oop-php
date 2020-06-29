<?php 

 require_once 'animal.php';
 require_once 'ape.php';
 require_once 'frog.php';

  	$sheep = new Animal("shaun");
	echo $sheep->name;
	echo $sheep->get_legs(); 
	echo $sheep->get_coldBlood();

	$ape = new ape("Kera sakti");
	echo $ape->name;
	echo $ape->yell();

	$frog = new frog('buduk');
	echo $frog->name;
	echo $frog-> jump();
	echo $frog->get_legs();

 ?>