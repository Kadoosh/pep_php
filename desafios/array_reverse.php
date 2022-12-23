<?php 

    $array = ["Maria", "Joao", "Miguel", "Joana", "Rafael", "Thiago"];
    $arrayReverse = [];
    print_r($array);

    function ArrayReverse($array, $arrayReverse ){

        $count = count($array);
        $increment = 0;
        $decrement = $count;

        foreach ($array as $key => $value) {
            $decrement--;
            for ($i=0; $i < $count; $i++) {
                $arrayReverse[$increment] = $array[$decrement];
                break;
            }
            $increment++;
        }
        print_r($arrayReverse);
    }

    ArrayReverse($array, $arrayReverse);

    //Outra forma que consegui fazer

    /*
    $i = 0;
    $j = $count;
    
    while ($i < $count) {
        $i++;
        $j--;
        $arrayReverse[$i] =  $array[$j];
        if ($j == 0) {

            break;
        }
    }
    print_r($arrayReverse);

    $arrayReverse = [];

    echo "<br>";

    print_r($array);

    echo "<br>";
    */
    

?>