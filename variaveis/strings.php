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



?>