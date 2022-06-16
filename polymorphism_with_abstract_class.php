<?php

// Polymorphism with Abstract Class

abstract class Area {

    abstract public function getRange();
}


//child class

class Rectangle extends Area {

    public $height;
    public $width;

    public function __construct ($height, $width){
        $this->height = $height;
        $this->width = $width;
    }

    public function getRange(){
        return $this->height * $this->width;
    }

}

// Another child class

class Parallelogram extends Area {

    public $height;
    public $width;

    public function __construct ($height, $width){
        $this->height = $height;
        $this->width = $width;
    }

    public function getRange(){
        return 2*($this->height * $this->width);
    }

}


function calculate($array){
    foreach ($array as $value) {

        echo $value->getRange(). "<br>";
    }
}

$array = [

    new Rectangle(3,5),
    new Parallelogram(5,4)

];



calculate($array);















?>