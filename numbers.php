<?php

    echo 10;
    echo "<br>";
    echo 10 + 12 ;
    echo "<br>";
    echo -10 -10;
    echo "<br>";
    echo 10 * 10;
    echo "<br>";
    echo 10 / 2;

    $num_int = 10;

    if (is_int($num_int)) {
        echo "<br> O numero $num_int e inteiro!! <br>";
    } else {
        echo "<br> O numero $num_int não e inteiro!! <br>";
    }

    $num_float = 12.40;

    $num_float += $num_int;

    echo "PHP calcula dados diferentes! $num_int + $num_float = ($num_float) <br>";

    if (is_float($num_float)) {
        echo "$num_float e um numero de ponto flutuante!";
    }



?>