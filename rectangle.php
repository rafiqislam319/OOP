<?php
	
	include "area.php";

	class Rectangle implements Area {

		private $height;
		private $width;

		public function __construct($height, $width){

			$this->height = $height;
			$this->width = $width;
		}

		public function calcArea(){					//this method comes from interface and we are using it in different purpose along wit this class's another method and property.

			return $this->height * $this->width;
		}

	}

	$rectArea = new Rectangle(5,7);
	echo "The area of rectangle is:" . " ". $rectArea->calcArea();


?>
