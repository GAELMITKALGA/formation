<?php

abstract class animal {
    abstract function makeSound(): void;

}
class chien extends animal {
    function makesound(): void{
        echo "wou !";
    }
}
class chat extends animal {
    function makesound(): void{
        echo "miauu !";
    }
}