<?php 
    class Person {
        private $firstN;
        private $secondN;
        private $age;
        private $profession;

        public function __construct(string $firstN, string $secondN, string $age, string $profession){
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
        private function isChild(){
            if ($this->age <= 12) {
                return "$this->firstN é uma criança <br>";
            } 
        }
        private function isYoung(){
            if ($this->age > 12 && $this->age <= 18) {
                return "$this->firstN é uma jovem <br>";
            } 
        }
        private function isAdolescent(){
            if ($this->age > 18 && $this->age <= 28) {
                return "$this->firstN é um adolescente <br>";
            } 
        }
        private function isAdult(){
            if ($this->age > 28 && $this->age <= 60) {
                return "$this->firstN é um adulto <br>";
            }
        }
        private function isOldMan(){
            if ($this->age > 60) {
                return "$this->firstN é um idoso <br>";
            } 
        }
        public function getAgeGoup(){
            echo $this->isChild();
            echo $this->isYoung();
            echo $this->isAdolescent();
            echo $this->isAdult();
            echo $this->isOldMan();
        }
    }

    class Address {
        private $street;
        private $district;
        private $number;
        private $city;
        private $state;
        private $cep;

        public function __construct(string $street, string $district, string $number, string $city, string $state, string $cep, Person $person){
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
   $person->getAgeGoup();
   $address->getFulladdress();
?>