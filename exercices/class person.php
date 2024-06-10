<?php

class Person{
    public $name 
    public $gae

    function __construct ($name, $age){
        $this->name= $name;
        $this->age= $age;
    }

    function affiche(){
        echo "name: . " $this-> $name;
        echo "age: ." $this->$age;
    }
}
