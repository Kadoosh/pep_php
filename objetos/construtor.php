<?php 

    class Cachorro {
        public $nome;
        public $raca;
        public $cor;
        public $idade;

        function __construct($nome, $raca, $cor, $idade){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->cor = $cor;
            $this->idade = $idade;
        }

        public function nomeCachorro(){
            echo "O nome do cachorro e $this->nome <br>";
        }
        public function racaCachorro(){
            echo "A raça do cachorro e $this->raca <br>";
        }
        public function corCachorro(){
            echo "A cor do cachorro e $this->cor <br>";
        }
        public function idadeCachorro(){
            echo "A idade do cachorro e $this->idade Anos <br>";
        }

    }

    $bulldog = new Cachorro("Toto", "Bulldog", "Amarelo", 2);

    $bulldog->nomeCachorro();
    $bulldog->racaCachorro();
    $bulldog->corCachorro();
    $bulldog->idadeCachorro();

    
?>