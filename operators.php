<?php 

    //Operadores aritmeticos

    echo 1 + 1; //Soma
    echo 2 - 1; //Subtração
    echo 2 * 2; //Multiplicação
    echo 4 / 2; //Divisão
    echo "<br>";
    echo 3 + 2 * 5; //Obtem resultado 13... Obedecendo a regra matematica de multiplicação primeiro
    echo "<br>";
    echo (3 + 2) * 5; //Obtem resultado 25... E possivel obrigar como queremos a operação ultilizando ()
    echo "<br>";

    $a = 10;
    $b = 1;
    $c = 2;

    $d = $a * $b / $c + $a + ($c - $a);

    echo $d;


?>