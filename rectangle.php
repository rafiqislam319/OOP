<?php
	
	include "interface.php";

	class Rectangle implements AreaInterface {

		function getArea(){       //this getArea() method comes from AreaInterface.
			echo "I am rectangle";
		}
	}

	$obj = new Rectangle();
	echo $obj->getArea();



?>