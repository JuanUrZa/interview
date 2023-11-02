<?php

class UserModel {

    private $name;

    private $surname;

    private $email;
    
    public function __construct() {
        // dependency injection
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }

    public function setName ($name) {
        $this->name = $name;
    }

    public function setSurname ($surname) {
        $this->surname = $surname;
    }


    public function setEmail ($email) {
        $this->email = $email;
    }
}