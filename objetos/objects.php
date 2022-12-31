<?php 

    class People { //Clases 

        //Public significa que ela vai ficar visivel em todo o codigo

        public $name; //Propriedades, são varivaies
        public $age;
        public $color;
        public $region;

        function walking(){ //Metodos são funçoes
            echo "Andando... <br>";
        }

        function talking(){ //Metodos são funçoes
            echo "Conversando... <br>";
        }

        function add($num, $num1){ //Metodos são funçoes
            echo $num + $num1 . "<br>";
        }

    };

    $rafael =  new People(); //Instanciado Objetos, $rafael e um objeto!

    $rafael->name = "Maria"; //Alterando propriedades

    $rafael->walking();

    $rafael->talking();

    $maria = new People(); //Instanciado Objetos

    $maria -> add(10, 20);
    $rafael -> add(5, 5);


?>