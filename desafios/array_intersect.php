<?php 

     $fruits1 = ["banana", "maça", "pera", "melancia", "Laranja"];
     $fruits2 = ["banana", "maça", "pera", "melancia", "Laranja", "Uva"];

     //Forma nativa PHP
     
     echo "Forma nativa PHP: <br>";
     print_r($result = array_intersect($fruits1, $fruits2));
     echo "<br>";

     //Forma feita a mão

     function arrCompare(array $arr1, array $arr2){

        foreach ($arr1 as $key => $value) {
            if (in_array($value, $arr2)) {
                $equal[$key] = $value;
            }
        }
        echo "Forma feita a mão: <br>";
        print_r($equal);
     }

     arrCompare($fruits1, $fruits2);

?>