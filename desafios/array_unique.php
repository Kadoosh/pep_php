<?php 

    $food = ["sanduiche", "biscoito", "bolacha", "sanduiche", "bolacha", "Arroz", "Feijao", "Arroz"];
    $result = array_unique($food);

    //Forma nativa PHP
    echo "Array Original: <br>";
    print_r($food);

    echo "<br> Forma nativa do PHP: <br>";

    print_r($result);

    //Forma 1

    echo "<br> Forma feita a mão 1: <br>"; //Resultado final igual a nativa do PHP

    function arrayUnique(array $arr){
        
        $arr2 = [];

        foreach ($arr as $key => $value) {
            foreach ($arr as $value1) {  
                if (in_array($value, $arr2)) {
                    continue;
                } else {
                    $arr2[$key] = $value1;
                }
            }
        }
        print_r($arr2);
    }

    arrayUnique($food);

    //Forma 2
    
    echo "<br> Forma feita a mão 2: <br>"; //Corrigido a ordem dos arrays

    function arrayUni(array $arr){
        
        $index = 0;
        $arr2 = [];

        foreach ($arr as $value) {
            foreach ($arr as $value1) {   
                if (in_array($value ,$arr2)) {
                    continue;
                } else {
                    $arr2[$index] = $value;
                    $index++;
                }
            }
        }
        print_r($arr2);
    }
    
    arrayUni($food);

    
?>