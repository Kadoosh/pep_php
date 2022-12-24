<?php

    $array = ["Maria", "Joao", "Miguel", "Joana", "Rafael", "Thiago"];
    $arrayReverse1 = [];
    $arrayReverse2 = [];
    $arrayReverse3 = [];
    echo "Array normal: <br>";
    print_r($array);

    //Forma 1 (Correta)

    $index = count($array);

    foreach ($array as $key => $value) {
        $index--;
        $arrayReverse1[$key] = $array[$index];  
    }
    
    echo " <br> Solução reverse 1: <br>";
    print_r($arrayReverse1);

    //Forma 2

    $count = count($array);
    $increment = 0;
    $decrement = $count;

    foreach ($array as $key => $value) {
        $decrement--;
        for ($i=0; $i < $count; $i++) {
            $arrayReverse2[$increment] = $array[$decrement];
            break;
        }
        $increment++;
    }
    echo " <br> Solução reverse 2: <br>";
    print_r($arrayReverse2);

    //Forma 3

    $i = 0;
    $j = $count;
    
    while ($i < $count) {

        $j--;
        $arrayReverse3[$i] =  $array[$j];
        $i++;

        if ($j == 0) {
            break;
        }
    }
    echo "<br> Solução reverse 3: <br>";
    print_r($arrayReverse3);


    

   










    

    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    //Outra forma que consegui fazer

    /*
   
    */
    

?>