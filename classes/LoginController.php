<?php

class LoginController extends Login{
    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function UserLogin(){
        return $this->getUser($this->username, $this->password);
    }
}

?>
