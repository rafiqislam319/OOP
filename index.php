<?php

	class Circle {
		const PI = 3.1416;

		function getRadius($radius){

			return $radius = $radius * self::PI;  // In class self:: is used to access constant
		}
	}


	$circle = new Circle();
	echo Circle::PI . "<br>";   // outside the class we can access contant directly with ClassName::
	echo $circle->getRadius(5);

?>