<?php

namespace App\Entity;

class User {
    protected $name;
    protected $gender;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }

    public function getGender(){
        return $this->gender;
    }

}