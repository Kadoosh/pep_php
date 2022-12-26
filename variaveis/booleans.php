<?php

    echo true;
    echo "<br>";
    echo false; //false == 0 0,0 [] "0" NULL

    if(true){
        echo "Teste true <br>";
    }

    if (5>2){ //true
        echo "5 e maior que 2 <br>";
    }

    $num = 4>2;

    if(is_bool($num)){
        echo "Tambem e Boolean <br>";
    }

?>