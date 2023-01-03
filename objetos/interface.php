<?php 

    interface Details {
        const name = "Rafael";
        const secondName = "Pereira";
        public function talking(); //todos os metodos detaclarados em interface sao obrigatorios a ser declarados em alguma classe
    }

    class Human implements Details {
        public function talking(){
            echo "Quem quer dinheiro? <br>";
        }
        public function sayName(){
            echo "Meu nome e: " . self::name ." ". self::secondName . "<br>";
        }
    }

    $rafael = new Human;
    $rafael->talking();
    $rafael->sayName();
?>