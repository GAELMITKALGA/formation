<?php

interface Affichable {
    function afficher();
  }
  
  class Page implements Affichable {
    public $message;
  
    function __construct($message) {
      $this->message = $message;
    }
  
    function afficher() {
      echo $this->message ;
    }
  }