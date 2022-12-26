<?php

    $variable_str = "String"; //Tipo string formado por letras ou palavras
    $variable_int = 100; //Tipo int formado por inteiros 10, 20, 23.. etc
    $variable_flo = 10.12; //Tipo float formado por numeros quebrados, podem ser ultilizados 6 a 7 casas (digitos)
    $variable_dou = 10.323; //Tipo double formado por numero quebrados, podem ser ultilizados 14 a 15 casa (digitos)
    $variable_boo = true; //Tipo bool formado por true ou false

    //variavel de variavel

    $test = "rafael";

    $$test = "pereira";

    echo "$test <br> ";
    echo "$rafael";

    //variavel por referencia

    $testRef = 15;

    $testRef1 =& $testRef;

    echo "<br>";
    echo $testRef;
    echo "<br>";
    echo $testRef1;
    echo "<br>";

    $testRef1 = 2222;

    echo "Mudei a referencia <br>" ;
    echo $testRef;
    echo "<br>";
    echo $testRef1;
    echo "<br>";

    $testRef = 500000;

    echo "Mudei a referenciada <br>" ;
    echo $testRef;
    echo "<br>";
    echo $testRef1;
    echo "<br>";
?>