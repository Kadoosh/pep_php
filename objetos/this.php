<?php 
    class Car {

    public $model;
    public $maxVelocity;

        function setMaxVelocity($velocity){
            $this->maxVelocity = $velocity; //Alterando o valor da propriedade
        }

        function getMaxVelocity(){
            echo "A velocidade maxima da $this->model e: $this->maxVelocity km/h <br>";
        }
    }
    
    $bmw = new Car;

    $bmw->model = "320i";
    $bmw->setMaxVelocity(299);
    $bmw->getMaxVelocity();

    $lamborghini = new Car;

    $lamborghini->model = "Aventador";
    $lamborghini->setMaxVelocity(399);
    $lamborghini->getMaxVelocity();
?>