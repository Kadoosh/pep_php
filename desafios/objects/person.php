<?php 

    class Person {
        protected $firstN;
        protected $secondN;
        protected $age;
        protected $profession;

        public function __construct($firstN, $secondN, $age, $profession,){
            $this->firstN = $firstN;
            $this->secondN = $secondN;
            $this->age = $age;
            $this->profession = $profession;
        }

        public function getFullName(){
            echo "Nome completo: $this->firstN $this->secondN <br>";
        }
        public function getAge(){
            echo "Idade: $this->age <br>";
        }
        public function getProfession(){
            echo "Profissão: $this->profession <br>";
        }
        public function getAgeGroup(){
            if ($this->age <= 12) {
                echo "$this->firstN e uma criança <br>";
            } else if($this->age > 12 && $this->age <= 18){
                echo "$this->firstN e um jovem <br>";
            } else if($this->age > 18 && $this->age <= 28){
                echo "$this->firstN e um adolescente <br>";
            } else if($this->age > 28 && $this->age <= 60){
                echo "$this->firstN e uma adulto <br>";
            } else {
                echo "$this->firstN e um idoso <br>";
            }
        }
    }

    class Address extends Person {
        protected $street;
        protected $district;
        protected $number;
        protected $city;
        protected $state;
        protected $cep;

        public function __construct($street, $district, $number, $city, $state, $cep){
            $this->street = $street;
            $this->district = $district;
            $this->number = $number;
            $this->city = $city;
            $this->state = $state;
            $this->cep = $cep;
        }
        public function getFulladdress(){
            echo "Endereço completo: $this->street N° $this->number, $this->district - $this->city, $this->state. CEP: $this->cep <br>";
        }

        
    }

   $person = new Person("Rafael", "Pereira", 23, "TI");
   $person->getFullName();
   $person->getAge();
   $person->getProfession();
   $person->getAgeGroup();
   $person = new Address("Rua nova capital", "Nova Vila", 109, "Anapolis", "Goias", 75064440);
   $person->getFulladdress();


?>