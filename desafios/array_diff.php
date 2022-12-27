<?php 

    $names1 = ["lucas", "pedro", "maria", "joao", "marcelo", "ana" ];
    $names2 = ["lucas", "joao", "pedro", "marcelo"];
    $difference0 = [];
    $difference1 = [];

    //Forma nativa do PHP

    $difference0 = array_diff($names1, $names2);

    echo "Forma nativa PHP: <br>";
    print_r($difference0);

    echo "<br>";

    //For feita a mão

    function arrDiff(array $arr1, array $arr2){
        
        foreach ($arr1 as $key => $value) {
            if (in_array($value, $arr2)) {
                continue;
            } else {
                $diff[$key] = $value;
            }  
        }

        print_r($diff);
    }

    echo "Forma feita a mão: <br>";
    arrDiff($names1, $names2);

?>
    
