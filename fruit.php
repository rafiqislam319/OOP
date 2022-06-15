<?php


abstract class Fruit {    //abstract class

	public $season;

	abstract function getName();      //abstract function

	public function __construct($season){
			$this->season = $season;
		}


}


?>