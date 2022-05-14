<?php

    class Fruit {
    public $name;
    public $color;

    function __construct($nam, $clr) {
        $this->name = $nam; 
        $this->color = $clr; 
    }
    function __destruct() {
        echo $this->name . '<br>';
        echo $this->color . '<br>';
    }
    
    }

    $fruitOne = new Fruit("Apple", 'red');
    $fruitTwo = new Fruit("Banana", 'yellow');


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <?php 
    
    ?>
</body>
</html>