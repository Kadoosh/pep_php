<?php 

    $people = new class(){ //Armazenando a classe dentro de uma variavel
        public $name = "Rafael";

        function talkName(){
            echo "Meu nome e $this->name <br>";
        }
    };

    echo $people->name . "<br>";
    
    $people->talkName();
?>