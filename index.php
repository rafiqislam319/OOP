<?php

class User {
    private $userName;
    private $userMail;

    function __construct($name, $email) {
        $this->userName = $name;
        $this->userMail = $email;

    }

    function getName() {
        return $this->userName;
    }
    function setName($name) {
        $this->userName = $name;
    }


}
$userOne = new User('jon', 'jon@example.com');

$userOne->setName('Mr jon Doe');

echo $userOne->getName(). '<br>' . '<br>';


//////////// Another Example
class Fruit {
        public $fruitName;
        public $fruitColor;
        private $fruitQuantity;   //private property

        function __construct($name, $color, $quantity) {
            $this->fruitName = $name;
            $this->fruitColor = $color;
            $this->fruitQuantity = $quantity;
        }
        function getFruitQuantity() {           //getter method to access private property
            return $this->fruitQuantity;
        }
        function setFruitQuantity($qty) {     //setter method to set value
            $this->fruitQuantity = $qty;
        }

    }

    $mango = new Fruit('Himsagor', 'Fluro Yellow', 500);
    $lemon = new Fruit('Kagzi Lebu', 'Green', 80);

    $mango->setFruitQuantity('111777');  //for set value

    echo $mango->fruitName .'<br>';
    echo $mango->fruitColor .'<br>';
    echo $mango->getFruitQuantity() .'<br>';

    echo $lemon->fruitName .'<br>';
    echo $lemon->fruitColor .'<br>';
    echo $lemon->getFruitQuantity() .'<br>';
?>
