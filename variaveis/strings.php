<?php 

    $name = "Rafael"; // Entre "" ou '' funciona!!!
    
    echo "Teste numero 1 <br>";
    echo 'Teste numero 2 <br>';
    echo 'Teste "numero 3" <br>';

    //diferenças entre as aspas

    echo "O $name tem 23 <br>";
    echo 'O $name tem 23 <br>';

    if(is_string($name)){
        echo 'A variavel $name e uma string <br>';
    }

    $secondName = "Pereira";

    //$name .= $secondName;

    $fullName = "$name $secondName";

    echo $fullName;

    //interpolação

    echo "<br> $name {$secondName}"; //não faz diferença entre $name e {$name}

    //Valores de escape

    //E obrigatorio o uso de aspas duplas "", aspas simples nao funciona ''


    echo "Aqui na primeira linha e \n isso aqui na segunda linha <br>"; // \n server para pular linha
    echo "Aqui e um tab \t <br>"; // \t serve com um TAB (4 espaços)
    echo "Aqui e o sinal de dollar sem declarar variavel \$"; //para imprimir o $ use uma barra invertida antes dele \$
    

?>