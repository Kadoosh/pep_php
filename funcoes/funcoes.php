<?php 

    //sintaxe de um função

    function teste(){ //se ultiliza uma palavra reservada "function" e logo em seguida o nome da funcao e os () que sao obrigatorios

        echo "Essa e uma funcao teste <br>"; //aqui e o escopo da funcao 

        $a = 10; //pode ser declarados variaveis dentro de funçoes
        $b = 200;

        echo "$a x $b = " . $a * $b . "<br>";

    };


    teste(); //chamada da função
    teste(); //pode ser chamadas quando necessarias, quantas vezes quiser

    $name = ["Maria", "Rafael", "Eduarda"];

    $names = implode(', ',$name); //implode, pega todos as strings de um array e transforma em uma unica string

    echo $names . "<br>";

    function multiplicar(){

        $a = 10;
        $b = 2;
        $c = 10;

        echo $a * $b * $c . "<br>" ; //obtem 200 como resposta
    }

    multiplicar();


?>