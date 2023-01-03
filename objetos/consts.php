<?php 

class Human {

    public const EYES = 2; // Constantes são declaradas sem o $, constantes sempre precisa ser inicializadas

    function constView(){
        echo self::EYES . "<br>"; //em constantes não se usa This e sim self
    }
}

$rafael = new Human;

echo $rafael::EYES . "<br>"; //constantes são acessadas atraves de :: 

$rafael->constView();
?>