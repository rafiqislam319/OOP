<?php 

	include "fruit.php";

	 class Mango extends Fruit {

		public function getName(){

		return "I am $this->season fruit Mango";
		
		}

	}

	$obj = new Mango('summer');
	echo $obj->getName(). "<br>";

?>