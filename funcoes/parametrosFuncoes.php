<?php 

    $modelCar = "Civic";

    function carSpeed($maxSpe, $model){ //variavel criada dentro dos parenteses e um parametro

        if ($maxSpe > 200) { 
            echo " O motor do $model vai explodir <br>";
        } else if ($maxSpe <=110) {
            echo "O $model e fraco <br>";
        } else {
            echo "E um $model normal <br>";
        };

    }

    carSpeed(220, $modelCar); //por aqui voce pode passar o valor hardcode ou uma variavel
    carSpeed(110, $modelCar, "motorType"); //Parametros desnecessarios o php ignora, porem parametro faltando da fatal error

    function carColor($color= "amarelo"){ //parametro default, podem ser definidos sem saber qual valor vai receber

        echo "A cor do carro e: $color";

    };
    carColor(); //sem erros
    carColor("azul"); //assume a cor azul

    $arr = ["Lucas", "Mauricio", "Matheus"];
    $lol = "Lucas";

    function names(array $arr){ //podemos definir qual tipo de valor e obrigatorio

        print_r($arr);

    }

    names($arr);
    //names($lol); aqui ele da um erro informando que não esta esperanda uma string e sim um array
?>
