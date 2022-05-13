<?php

class User {

     public $userName;
     public $userMail;  
     
     public function __construct($name, $email){

        $this->userName = $name;
        $this->userMail = $email;
     }
     
}

    $userOne = new User('Tom', 'tom@gmail.com');  
    $userTwo = new User('Jerry', 'jerry@gmail.com');  


    echo $userOne->userName . '<br>';
    echo $userOne->userMail . '<br>';

    echo $userTwo->userName . '<br>';
    echo $userTwo->userMail;


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