<?php 

    //Estrutura While

    $testWhile = 0;

    while ($testWhile < 10) { //enquanto 0 for menor que 10 repita...

        $testWhile++;
    
        echo "Teste do while $testWhile <br>";

    }

    //Break

    $testWhile = 0;

    echo "<br>";

    while ($testWhile < 10) { //enquanto 0 for menor que 10 repita...
        
        $testWhile++;

        echo "Teste do while $testWhile <br>";

        if ($testWhile >= 5) { //se $testeWhile for maior ou igual a 5 faça...

            $testWhile = 10;

            echo "Caiu no if, agora testWhile vale: $testWhile e o break foi executado! <br>";

            break; //aqui e parado o while porque a condição do if deu true

        }

    }

    //Loop aninhado

    $loopA = 10;
    $loopB = 0;
    $loopC = 10;

    while ($loopA > 0) {  
        while ($loopB < 10) {
            while ($loopC > 0) { 
                echo "Loop C: $loopC <br>";
                $loopC--;
                break; 
            }
            echo "Loop B: $loopB <br>";
            $loopB++;
            break;
        }
        echo "Loop A: $loopA <br>";
        $loopA--;
        
    }

    //Continue

    $testWhile = 0;

    echo "<br>";

    while ($testWhile < 10) { //enquanto 0 for menor que 10 repita...
        
        $testWhile++;

        echo "Teste do while $testWhile <br>";

        if ($testWhile == 5) { //se $testeWhile for igual a 5 faça...

            echo "Caiu no if, agora testWhile vale: $testWhile e o Continue foi executado! <br>";

            continue; //aqui continua a execução mesmo o if dar true

        } else if($testWhile == 10){

            echo "Caiu no if, agora testWhile vale: $testWhile e o break foi executado! <br>";

            break;
        }

    }

    echo "<br>";

    $arrayTest = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $i = 0;

    while ($i < count($arrayTest)) {
        $value = $arrayTest[$i];

        if ($value == 5) {
            $i++;
            continue;//aqui ele pula a execução do 5
        };

        echo "Valor no Array: $value <br>";

        $i++;
    };

    //doWhile
    echo "<br>";

    $testDoWhile = 0;

    do {
        echo "Testando comportamento do while $testDoWhile <br>";

        $testDoWhile++;

    } while ($testDoWhile < 10);

    //For
    echo "<br>";

    for ($i=0; $i < 10; $i++) { 
        if ($i == 2) {
            echo "Caiu no if... <br>";
            $i++;
            continue;
        }
        echo "Teste do For $i <br>";
    }

    echo "<br>";

    $arrayFor = [];

    for ($i=0; $i < 10 ; $i++) { 
        array_push($arrayFor,$i);
    }
    print_r($arrayFor);

    for ($i=0; $i < count($arrayFor) ; $i++) { 
        if ($arrayFor[$i] % 2 != 0) {
            echo "<br>Numero Impar: $arrayFor[$i]";
        }
    }

    //For Each

    echo "<br>";
    
    $arrayFor = ["joao", "Maria", "Pedro", "Poliana"];

    foreach ($arrayFor as $key => $value) {
        echo "$value";
    }
    
   

?>