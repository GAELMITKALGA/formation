<?php

class FootballTeam {
    private string $name;
    private string $coach;
    private string $city;


    public function __construct($name, $coach, $city){
    
        $this->teamname = $teamname;
        $this->coach = $coach; 
        $this->city = $city; 
    } 

    public function getName() {
        return $this->name;

    }

    public function getcoach() {
        return $this->coach;

    }

    public function getcity() {
        return $this->city;

    }

}
