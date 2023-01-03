<?php 

    //Exemplo de PUBLIC

    class Car {
        public $wheels = 4;
        private $flashlight = 2; //E possivel acessar somente dentro da classe car
        protected $doors = 4;  //E possivel acessar somente dentro da classe car e tambem das classes filhas

        public function getFlashlight(){
            return $this->flashlight;
        }
        public function getDoors(){
            return $this->doors;
        }
    }

    class Mechanical {
        public function modWheels(object $car){
            $car->wheels = 3;
        }
        public function moreFlashlight(object $car, int $value){
            $car->flashlight = $value;
        }
    }

    $car = new car;

    echo $car->wheels . "<br>";

    $rafael = new Mechanical;

    $rafael->modWheels($car);

    echo $car->wheels . "<br>";

    //$rafael->moreFlashlight($car, 4); - não e possivel alterar a propriedade porque a propriedade e privada
    //echo $car->flashlight; - Tambem não e possivel acessar pois e privada
    echo $car->getFlashlight() . "<br>";
    echo $car->getDoors() . "<br>"; 





?>