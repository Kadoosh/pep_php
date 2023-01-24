<?php 
    class Questioning {
        private $questions = 
        [
            "Telefonou para a vítima?",
            "Esteve no local do crime?",
            "Mora perto da vítima?",
            "Devia para a vítima?",
            "Já trabalhou com a vítima?"
        ];
            
        
        protected function getQuizAnswer(){
            $questions = $this->questions;
            for ($i=0; $i < count($questions); $i++) { 
                do {
                    $answers[$i] = strtolower(readline("Pergunta N°$i: " . $questions[$i]));     
                } while ($answers[$i] != "yes" && $answers[$i] != "no");
            }
            return $answers;
        }
    }

    class Person extends Questioning {
        protected function getUserNameResponse(){
            do {
                $suspect = strtolower(readline("Digite seu nome, suspeito: "));
            } while (empty($suspect));
            return $suspect;
        }
    }

    class Suspect extends Person {
        const NUM_OF_SUSPECTS = 1;
        const TO_BE_NO_HAVE_KILLERS = 0;
        const TO_BE_HAVE_TWO_KILLERS = 2;
        const YES_TO_BE_INNOCENT = 1;
        const YES_TO_BE_SUSPECT = 3;
        const YES_TO_BE_ACCOMPLICE = 4;
        const YES_TO_BE_ASSASSIN = 5;

        private function ratingCheck(array $answers){
            for ($i=0; $i < count($answers); $i++) { 
                $count = array_count_values($answers[$i]);
                $amountOfYes[$i] = $count["yes"];
            }
            return $amountOfYes;
        } 
        private function getParticipationInCrime(array $suspects, array $amountOfYes){
            for ($i=0; $i < count($suspects); $i++) { 
                if($amountOfYes[$i] <= self::YES_TO_BE_INNOCENT){
                    echo "\r\n$suspects[$i] e Inocente!";
                    $participation[$i] = self::YES_TO_BE_INNOCENT;
                } else if ($amountOfYes[$i] > self::YES_TO_BE_INNOCENT && $amountOfYes[$i] == self::YES_TO_BE_SUSPECT){
                    echo "\r\n$suspects[$i] e Suspeito!";
                    $participation[$i] = self::YES_TO_BE_SUSPECT;
                } else if($amountOfYes[$i] == self::YES_TO_BE_ACCOMPLICE){
                    echo "\r\n$suspects[$i] e Cumplice!";
                    $participation[$i] = self::YES_TO_BE_ACCOMPLICE;
                } else if($amountOfYes[$i] == self::YES_TO_BE_ASSASSIN){
                    echo ("\r\n$suspects[$i] e Assasino!!");
                    $participation[$i] = self::YES_TO_BE_ASSASSIN;
                }
            }
            $this->getLiar($participation);
        }
        private function getLiar($participation){
            print_r($participation);
            $count = array_count_values($participation);

            switch ($count[self::YES_TO_BE_ASSASSIN]) {
                case self::TO_BE_HAVE_TWO_KILLERS:
                    echo "\r\nTem alguem mentindo!";
                    break;
                case self::TO_BE_NO_HAVE_KILLERS:
                    echo "\r\nTem alguem mentindo!";
                    break;
            }
        }
        public function getClassification(){
            for ($i=0; $i <= self::NUM_OF_SUSPECTS; $i++) { 
                $userName[$i] = $this->getUserNameResponse();
                $answers[$i] = $this->getQuizAnswer();
            } 
            $this->getParticipationInCrime($userName, $this->ratingCheck($answers));
        }
    } 


    $suspect = new Suspect();

    $suspect->getClassification();

?>