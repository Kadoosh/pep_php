<?php 

    $brands1 = ["porsche", "mercedes", "chevrolet", "Ford"];
    $brands2 = ["Ferrari", "Volkswagen", "Fiat"];

    //Forma nativa PHP

    echo "Forma nativa PHP: <br>";

    print_r($result = array_merge($brands1, $brands2));

    echo "<br>";

    //Forma feita a mão

    echo "Forma feita a mão: <br>";

    function arrayMerge(array $arr1, array $arr2 ){

        $index = count($arr1);
        foreach ($arr2 as $value) {
            $arr1[$index] = $value;
            $index++;
        }
        print_r($arr1);
    }

    
    arrayMerge($brands1, $brands2);

?>