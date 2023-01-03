<?php 

    class Human {}

    class Animal {}

    class Ets extends Human {}
    

    $rafael = new Human;

    $lobo = new Animal;

    $ets = new Ets;

    if ($ets instanceof Human) {
        echo "ETS pertence a humano <br>"; // True
    } else  {
        echo "ETS não pertence a Humanos <br>";
    }

    if ($rafael instanceof Human) {
        echo "Rafael pertence a humano <br>"; // True
    } else  {
        echo "Rafael não pertence a Humanos <br>";
    }

    if ($lobo instanceof Animal) {
        echo "Logo pertence a Animais <br>"; // True
    } else {
        echo "Lobo não pertence a Animais <br>";
    }

?>