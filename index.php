<?php
class User {

     public $userName = 'jon';
     public $userMail = 'jon@doe.com';   // property

     public function addPost(){                 //this is a method 
         return "$this->userMail";
         
     }
    
}

$userOne = new User();  //this is an object // $userOne is an instance

echo $userOne->userName  . '<br>';
echo $userOne->addPost();

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