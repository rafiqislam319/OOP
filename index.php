<?php

    class User {
        public $userName;
        protected $userEmail;   //protected property

        function __construct($name, $mail) {
            $this->userName = $name;
            $this->userEmail = $mail;
        }
 
        public function message(){
            return "$this->userEmail, send a message";
        }

        

    }
        //child class
    class AdminUser extends User {

        function __construct($name, $mail) {
            parent::__construct($name, $mail);                                                               
        }
        public function message(){
            return "$this->userEmail , An Admin, send a message";
        }


    }


    $userOne = new User('Jon', 'jon@gmail.com');
    $userTwo = new AdminUser('Tom', 'tom@gmail.com');


    echo $userTwo->message() .'<br>';    // getting protected property from child class instance.

?>
