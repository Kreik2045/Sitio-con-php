<?php

class Usuario{

    private $usu;
    private $pass;
    
    function __construct($user="", $pwd=""){
        $this -> usu = $user;
        $this -> pass = $pwd;

    }

    function getUsername(){
        return $this -> usu; 

    }

    function getPass(){
        return $this -> pass;

    }

    function setUsername($usr){
        $this -> usu = $usr;

    }

    function setPassword($pwd){
        $this -> pass = $pwd;

    }

}

?>