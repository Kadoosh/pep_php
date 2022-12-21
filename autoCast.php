<?php 

    $num1 = 5; //inteiro
    $num2 = 2; //inteiro

    if (is_integer($num2)) {
        echo "$num2 e Inteiro!! <br>";
    }

    $num2 = $num1 / $num2; //resultado 2.5 Float!!

    if (is_float($num2)) {
        echo "$num2 e Float!! <br>";
    }
    
    $num2 = 2 . 5; //String concatenando 2 e 5 resultando em 25

    if (is_string($num2)) {
        echo "$num2 e uma String!! <br>";
    }


    $nome = "Rafael";
    $sobrenome = "Pereira";

    $nomeCompleto = $nome . " " . $sobrenome; //concatenando strings

    echo $nomeCompleto . "<br>";

    $calc = "5" * 12;

    echo gettype($calc);
    echo "<br>" . $calc . "<br>";

    echo gettype([]);
    echo "<br>";

    echo gettype(11.2);
    echo "<br>";

    echo gettype("text");
    echo "<br>";


?>