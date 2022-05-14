<?php

    class User {
        public $userName;
        public $userEmail;
        private $phoneNumber;   //private property

        function __construct($name, $mail, $phone) {
            $this->userName = $name;
            $this->userEmail = $mail;
            $this->phoneNumber = $phone;
        }
        function getPhone() {           //getter method to access private property
            return $this->phoneNumber;
        }
        function setPhone($phone) {     //setter method to set value
            $this->phoneNumber = $phone;
        }

    }
        //child class
    class AdminUser extends User {

        public $level;

        function __construct($name, $mail, $phone, $lvl) {
            $this->level = $lvl;
            parent:: __construct($name, $mail, $phone);       /* this will access the common property from parent class, 
                                                                since a constructor function is already here but the common properties are not here, 
                                                               to overcome tis issue we have to use this procedure.*/                                                                                                                     
        }
    }


    $userOne = new User('Jon', 'jon@gmail.com', '0121');
    $userTwo = new User('Tom', 'tom@gmail.com', '0141');
    $userThree = new AdminUser('Jerry', 'jerry@gmail.com', '0000', 4);

    $userOne->setPhone('111');  //for set phone

    echo $userOne->userName .'<br>';
    echo $userOne->userEmail .'<br>';
    echo $userOne->getPhone() .'<br>';

    echo $userTwo->userName .'<br>';
    echo $userTwo->userEmail .'<br>';
    echo $userTwo->getPhone() .'<br>';

    echo $userThree->userName .'<br>';
    echo $userThree->userEmail .'<br>';
    echo $userThree->getPhone() .'<br>';
    echo $userThree->level .'<br>';

?>
