<?php 
    
    class Questioning {
        private function getQuestions(){
            return $questions = [
                "Telefonou para a vítima?",
                "Esteve no local do crime?",
                "Mora perto da vítima?",
                "Devia para a vítima?",
                "Já trabalhou com a vítima?"];
        }
        protected function getQuizAnswer(){
            $questions = $this->getQuestions();
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
        private function ratingCheck(array $answers){
            for ($i=0; $i < count($answers); $i++) { 
                $count = array_count_values($answers[$i]);
                $amountOfYes[$i] = $count["yes"];
            }
            return $amountOfYes;
        } 
        private function getParticipationInCrime(array $suspects, array $amountOfYes){
            $innocent = 1;
            $suspect = 3;
            $accomplice = 4;
            $assassin = 5;

            for ($i=0; $i < count($suspects); $i++) { 
                if($amountOfYes[$i] <= $innocent){
                    echo "\r\n$suspects[$i] e Inocente!";
                } else if ($amountOfYes[$i] > $innocent && $amountOfYes[$i] == $suspect){
                    echo "\r\n$suspects[$i] e Suspeito!";
                } else if($amountOfYes[$i] == $accomplice){
                    echo "\r\n$suspects[$i] e Cumplice!";
                } else if($amountOfYes[$i] == $assassin){
                    echo ("\r\n$suspects[$i] e Assasino!!");
                }
            }
        }
        private function getLiar($amountOfYes){
            
            $assassin = 5;
            $count = array_count_values($amountOfYes);
            $amountOfKillers = $count[$assassin];

            if ($amountOfKillers >= 2 || $amountOfKillers == 0) {
                echo "\r\nTem alguem mentindo!";
            }
        }

        public function getClassification(){
            $numOfSuspects = 4;

            for ($i=0; $i <= $numOfSuspects; $i++) { 
                $userName[$i] = $this->getUserNameResponse();
                $answers[$i] = $this->getQuizAnswer();
            } 
            $amountOfYes = $this->ratingCheck($answers);
            $this->getParticipationInCrime($userName, $amountOfYes);
            $this->getLiar($amountOfYes);
        }
    } 


    $suspect = new Suspect();

    $suspect->getClassification();

?>