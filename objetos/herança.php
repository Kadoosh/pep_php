<?php 

    class Pai {
        public function teste() {
            echo "Eu sou o Pai <br>";
        }
        private function talking(){
            echo "Estou falando!!";
        }
        public function getTalking(){
            $this->talking();
        }
        protected function walking(){
            echo "Estou andando!!";
        }
        public function getWalking(){
            $this->walking();
        }
    }

    class Filho extends Pai{
        public function teste(){
            echo "Eu sou o Filho <br>";
            parent::teste(); //acessando metodo da class Pai
        }
        public function getWalkingProtected(){
            $this->walking(); //acessando metodo com Protected
        }
        public function getTalkingPrivate(){
            //$this->talking(); //não e possivel acessar o metodo com private
            $this->getTalking();
        }
    }

    $filho = new filho;
    $pai = new pai;

    $pai->teste();
    $filho->teste();

    echo $pai->getTalking() . "<br>";
    echo $filho->getTalking() . "<br>";

    echo $filho->getWalkingProtected() . "<br>";

    echo $filho->getTalkingPrivate() . "<br>";
?>