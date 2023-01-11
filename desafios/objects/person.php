<?php 
    class Person {
        protected $firstN;
        protected $secondN;
        protected $age;
        protected $profession;

        public function __construct($firstN, $secondN, $age, $profession){
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
        public function isChild(){
            if ($this->age <= 12) {
                echo "$this->firstN e uma criança <br>";
            } 
        }
        public function isYoung(){
            if ($this->age > 12 && $this->age <= 18) {
                echo "$this->firstN e uma jovem <br>";
            } 
        }
        public function isAdolescent(){
            if ($this->age > 18 && $this->age <= 28) {
                echo "$this->firstN e um adolescente <br>";
            } 
        }
        public function isAdult(){
            if ($this->age > 28 && $this->age <= 60) {
                echo "$this->firstN e um adulto <br>";
            }
        }
        public function isOldMan(){
            if ($this->age > 60) {
                echo "$this->firstN e um idoso <br>";
            } 
        }
    }

    class Address {
        protected $street;
        protected $district;
        protected $number;
        protected $city;
        protected $state;
        protected $cep;

        public function __construct($street, $district, $number, $city, $state, $cep, $person){
            $this->street = $street;
            $this->district = $district;
            $this->number = $number;
            $this->city = $city;
            $this->state = $state;
            $this->cep = $cep;
            $this->person = $person;
            
        }
        public function getFulladdress(){
            echo "Endereço completo: $this->street N° $this->number, $this->district - $this->city, $this->state. CEP: $this->cep <br>";
        }
        public function getPerson(){
            return $this->person;
        }
    }

   $person = new Person("Rafael", "Pereira", 23, "TI");
   $address = new Address("Rua nova capital", "Nova Vila", 109, "Anapolis", "Goias", 75064440 , $person);
  
   $address->getPerson()->getFullName();
   $person->getAge();
   $person->getProfession();
   $address->getFulladdress();

   $person->isChild();
   $person->isYoung();
   $person->isAdolescent();
   $person->isAdult();
   $person->isOldMan();
?>