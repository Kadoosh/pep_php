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
            echo "Endereço completo: $this->street N° $this->number, $this->district - $this->city, $this->state. CEP: $this->cep";
        }

        
    }

   $person = new Person("Rafael", "Pereira", 23, "TI");
   $person->getFullName();
   $person->getAge();
   $person->getProfession();
   $person = new Address("Rua nova capital", "Nova Vila", 109, "Anapolis", "Goias", 75064440);
   $person->getFulladdress();



?>