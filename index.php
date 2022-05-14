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

echo $userOne->getName();

?>
