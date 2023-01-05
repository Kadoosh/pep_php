<?php

use Car as GlobalCar;

    class Car {
        public $doors;
        public $color;
        public $model;

        function __construct($doors, $color, $model){
            $this->doors = $doors;
            $this->color = $color;
            $this->model = $model;
        }
    }

    $bmw = new Car(4, "Branca", "320i");

    echo "O o modelo da bmw e $bmw->model a cor dela e $bmw->color e ela tem $bmw->doors portas<br>";

?>