<?php

class RegistrationController extends Registration{
    private $username;
    private $password;
    private $nickname;
    private $phonenumber;
    private $email;

    public function __construct($username, $password, $nickname, $phonenumber, $email){
        $this->username = $username;
        $this->password = $password;
        $this->nickname = $nickname;
        $this->phonenumber = $phonenumber;
        $this->email = $email;
    }

    public function UserRegister(){
        $this->setUser($this->username, $this->password, $this->nickname, $this->phonenumber, $this->email);
    }

}

?>