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

    $d = $a * $b / $c;

    echo $d;

    //Operadores de modulo

    $e = 20;
    $f = 4;


    echo $e % $f;
    echo " = Modulo <br>";
    echo $e / $f;
    echo " = Divisao <br>";

    $a = 5;
    $b = 2;

    echo $a ** $b; // ** operador de exponeciação 

    $c = 4 . 4;  // . operador de concatenação

    echo "<br>" . $c . "<br>";

    $x = 10;
    $y = 10;

    $x++; // incremento +1
    $y = $y + 1; // incremento +1

    echo $x . "<br>";
    echo $y . "<br>";

    $x--; // decremento -1
    $y = $y - 1; //decremento -1

    echo $x . "<br>";
    echo $y . "<br>";

    // Operadores de comparação

    $trueOrFalse = 100 == 100; //comparação, == verificar se o valor e igual
    echo "<br> $trueOrFalse"; 
    $trueOrFalse = 100 === 100; //identico, === verica se o valor e o tipo e igual
    echo "<br> $trueOrFalse";
    $trueOrFalse = 100 != 100; //diferença, != se for valores distintos retorna TRUE
    echo "<br> $trueOrFalse";
    $trueOrFalse = 100 !== 100; //não identico, !== verica se o valor e o tipo e diferente
    echo "<br> $trueOrFalse";
    $trueOrFalse = 100 > 100; //maior que, > verifica se um numero e maior que outro
    echo "<br> $trueOrFalse"; 
    $trueOrFalse = 100 >= 100; //maior ou igual a, >= verifica se o valor e maior ou igual ao outro
    echo "<br> $trueOrFalse";
    $trueOrFalse = 100 < 100; //menor que, < verifica se um valor e menor que o outro
    echo "<br> $trueOrFalse"; 
    $trueOrFalse = 100 <= 100; //menor ou igual a, <= verifica se um valor e menor ou igual ao outro
    echo "<br> $trueOrFalse";


    $string = "10";
    $integer = 10;

    $result = $string === $integer; //retorna FALSE
    $result = $string == $integer;  //retorna TRUE

    $result = $string !== $integer; //retorna TRUE
    $result = $string != $integer; //retorna FALSE

    //Operadores logicos retorna TRUE ou FALSE
    //AND == &&
    //OR == ||
    //NOT == !

    $t = 1; // 1 Representa TRUE
    $f = 0; // 0 Representa FALSE

    //AND && da TRUE somente quando as duas são verdadeiras, do contrario vai ser false

    $testAnd = 2 <= 5 && 4 <= 6; //true
    echo $testAnd . "<br>";
    $testAnd = 2 >= 5 && 4 <= 6; //false
    echo $testAnd . "<br>";
    $testAnd = 2 <= 5 && 4 >= 6; //false
    echo $testAnd . "<br>";
    $testAnd = 2 >= 5 && 4 >= 6; //false
    echo $testAnd . "<br>";

    //OR || da TRUE quando um dos lados e verdadeiro, caso os dois seja falso vai dar em FALSE 

    $testOr = 2 <= 5 && 4 <= 6; //true
    echo $testOr . "<br>";
    $testOr = 2 >= 5 && 4 <= 6; //true
    echo $testOr . "<br>";
    $testOr = 2 <= 5 && 4 >= 6; //true
    echo $testOr . "<br>";
    $testOr = 2 >= 5 && 4 >= 6; //false
    echo $testOr . "<br>";

    //NOT ! Inverte true em false e false em true

    $testNot = !(4 > 3); //retorna false
    $testNot = !(3 > 4); //retorna True

    //Operador Cast

    $string = "12";

    $integer = (int) $string;

    if (is_integer($integer)) {

        echo "E inteiro!!";

    }

    $float = (float) $string; //funciona para float
    $string = (string) $integer; //funicona para string


    //Operadores de atribuição

    $a = 10;
    
    $a *= 5; // Mesma coisa que $a = $a * 5;
    $a -= 5; // Mesma coisa que $a = $a - 5;
    $a /= 5; // Mesma coisa que $a = $a / 5;
    $a %= 5; // Mesma coisa que $a = $a % 5 (resto);



    

?>