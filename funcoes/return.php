<?php 

    function soma($n1, $n2){

        return $n1 * $n2;
    }
    
    echo soma(10, 10);
    $x = soma(2, 2);
    echo "<br>" . $x . "<br>";

    function aoQuadrado($n1){

        return $n1 ** 2;
    }

    echo aoQuadrado(10);

    echo "<br>";

    function functions($a, $b, $c){

        print_r(func_get_args());

        echo "<br>";

        echo func_num_args() . "<br>";

        return $a + $b + $c;

    }

    functions(1, 2, 3);

?>