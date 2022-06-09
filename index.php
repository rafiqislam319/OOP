<?php 
    class User {
        public $name;
        protected $email;   //protected property

        function __construct($nam, $eml){
            $this->name = $nam;
            $this->email =$eml;   
        }
        function getEmail(){
            return $this->email;
        }
        function message(){
            return "$this->email The main User send the message";
        }
}
    /**
     * child class
     */
    class AdminUser extends User{
        public $phone;
        private $address;
        function __construct($nam, $eml, $phn, $adr){
            $this->phone = $phn;
            $this->address = $adr;
            parent::__construct($nam, $eml);
        }
        function getAddress(){
            return $this->address;
        }
        function message(){
            return "$this->email The Admin User send the message";   // if we want to access ($this->email) in this child class then $email should be public or protected, it can not be private. if we set it private in parent class, then we have to redefine it in this child class.
        }
        
    
    }



    $userOne = new User('Tom', 'tom@tom.com');
    $userTwo = new AdminUser('jon', 'jon@jon.com', 121, 'Dhaka');

    echo $userOne->name . '<br>';
    echo $userOne->getEmail() . '<br>';

    echo $userTwo->name . '<br>';
    echo $userTwo->getEmail() . '<br>';
    echo $userTwo->phone . '<br>';
    echo $userTwo->getAddress() . '<br>';

    echo $userOne->message(). '<br>';
    echo $userTwo->message(). '<br>';  //accessing protected property.

?>