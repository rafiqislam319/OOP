<?php
	
	include "interface.php";

	class Triangle implements AreaInterface {

		function getArea(){
			echo "I am triangle";
		}
	}

	$obj = new Triangle();
	echo $obj->getArea();




?>