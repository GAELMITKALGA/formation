<?php

class employé extends person{
    public $jobtitle;

    function __construct($name, $age, $jobtitle){
        parent:: __construc($name, $age,);
        $this->jobTitle= $jobTitle;
    }

    
function affichertoutesinfos(){
    parent::aficher();
    echo "function : " . $this->jobTitle. 
}
}