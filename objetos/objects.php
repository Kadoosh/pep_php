<?php 

    class People { //Clases 

        //Public significa que ela vai ficar visivel em todo o codigo

        public $name; //Propriedades, são varivaies
        public $age;
        public $color;
        public $region;

        function nameChoice($name){ //Metodos são funçoes
            $this->name = $name; //acessando propriedades com o This
        }

        function talking(){ //Metodos são funçoes
            return "Bla Bla Bla <br>";
        }

        function shoutOut(){
            return strtoupper($this->talking()); //chamando metodos do proprio objeto com o This
        }

        function add($num, $num1){ //Metodos são funçoes
            echo $num + $num1 . "<br>";
        }

    };

    $rafael =  new People(); //Instanciado Objetos, $rafael e um objeto!

    $rafael->name = "Maria"; //Alterando propriedades

    echo "O nome da pessoa e: $rafael->name <br>";

    $rafael->nameChoice("Rafael");

    echo "O nome da pessoa e: $rafael->name <br>";

    $maria = new People(); //Instanciado Objetos

    $maria -> add(10, 20);
    $rafael -> add(5, 5);

    echo $rafael->talking();
    echo $rafael->shoutOut();


?>