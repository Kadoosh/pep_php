<?php 

    $newArray = [0, 1, 2, 3];

    // echo $newArray; Nao funciona pois o echo tenta transformar o array em string

    print_r($newArray);
    echo "<br>";
    echo $newArray[2];

    $newArray[0] = "Rafael";
    $newArray[1] = 1500;
    $newArray[2] = 12.34;
    $newArray[3] = true;

    echo "<br>";
    print_r($newArray);

    //Array associativo
   
    echo "<br>";

    $testAss =["Nome" => "Rafael", "Pernas" => 2, "Cor" => "Pardo"];

    print_r($testAss);  

    echo "<br>";

    $newtest = ["chave" => "valor", "Booleano" => true];

    print_r($newtest);

    echo "<br>";

    $car = [
        "marca" => "AUDI",
        "modelo" => "R8",
        "cavalaria" => 800,
        "velocidade_max" => 400,
        "teto_solar" => true,
        "blindado" => false
    ];

    $model = $car['marca'];
    $maxVelocity = $car['velocidade_max'];

    print_r($car);

    echo "<br> O carro e um $model e possui a velocidade maxima de $maxVelocity Km/h";

    $people = [
        'nome' => "Rafael",
        'idade' => 23,
    ];

    $olderAge = 18;
    $peopleName = $people["nome"];

    if ($people["idade"] >= $olderAge) {
        echo "<br>$peopleName e maior de idade!";
    } else {
        echo "<br>$peopleName e menor de idade!";
    }


?>