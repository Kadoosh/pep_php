<?php

class Vehicle {
    protected $maxSpeed;
    protected $numWheels;
    protected $propulsion;

    public function __construct($speed, $wheels, $propulsion) {
        $this->maxSpeed = $speed;
        $this->numWheels = $wheels;
        $this->propulsion = $propulsion;
    }
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
    public function getNumWheels(){
        return $this->numWheels;
    }
    public function getPropulsion(){
        return $this->propulsion;
    }
}

class Car extends Vehicle {
    protected $numDoors;

    public function __construct($speed, $wheels, $doors, $propulsion) {
        parent::__construct($speed, $wheels, $propulsion);
        $this->numDoors = $doors;
    }
    public function getNumDoors(){
        return $this->numDoors;
    }
}

class Bike extends Vehicle {
    protected $type;

    public function __construct($speed, $wheels, $type, $propulsion) {
       parent::__construct($speed, $wheels, $propulsion);
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }


}

$carro = new Car(230, 4, 4, "Motor a Combustão");
$bicicleta = new Bike(80, 2, "BMX", "Humana");

echo 
" Velocidade Maxima da bicicleta: " . $bicicleta->getMaxSpeed() . 
" Quantidade de rodas:" . $bicicleta->getNumWheels() . 
" Ela e do tipo: " . $bicicleta->getType() . 
" <br>";
echo 
" Velocidade Maxima do carro: " . $carro->getMaxSpeed() . 
" Quantidade de rodas:" . $carro->getNumWheels() . 
" Ele tem: " . $carro->getNumDoors() . 
" Portas <br>";

echo "O tipo de propulsão do carro: " . $carro->getPropulsion() . "<br>";
echo "O tipo de propulsão da bicicleta: " . $bike->getPropulsion() . "<br>";
?>