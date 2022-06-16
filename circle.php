<?php
	include "area.php";
	class Circle implements Area {

		private $radius;

		public function __construct($rad){
			$this->radius = $rad;
		}

		public function calcArea(){						  //this method comes from interface and we are using it in different purpose along wit this class's another method and property.
			return $this->radius * $this->radius * PI();

		}
	

	}

	$circleArea = new Circle(3);
	echo "The circle area is". " ". $circleArea->calcArea();

?>
