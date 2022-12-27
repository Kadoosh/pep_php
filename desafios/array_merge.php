<?php 

    $brands1 = ["porsche", "mercedes", "chevrolet", "Ford"];
    $brands2 = ["Ferrari", "Volkswagen", "Fiat"];
    $result = [];

    //Forma nativa PHP

    echo "Forma nativa PHP: <br>";

    $result = array_merge($brands1, $brands2);

    print_r($result);

    echo "<br>";

    //Forma feita a mão

    echo "Forma feita a mão: <br>";

    function arrayMerge(array $arr1, array $arr2 ){

        $result = $arr1;
        $index = count($result);

        foreach ($arr2 as $key => $value) {
            $result[$index] = $value;
            $index++;
        }

        print_r($result);

    }

    
    arrayMerge($brands1, $brands2);

?>