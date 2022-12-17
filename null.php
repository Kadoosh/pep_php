<?php 
    
    $name = null;

    if(is_null($name)){
        echo "O valor e nulo! <br>";
    }

    $name = "Rafael";

    if(is_null($name)){
        echo "O valor e nulo!";
    } else {
        echo "O valor não e mais nulo!";
    }
?>