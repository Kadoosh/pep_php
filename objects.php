<?php 

    class People {

        function walking(){
            echo "Andando...";
        }

        function talking(){
            echo "Conversando...";
        }

    };

    $rafael =  new People();

    $rafael->name = "Rafael";

    echo  $rafael->name;

    echo "<br>";

    $rafael->walking();

    $rafael->talking();


?>