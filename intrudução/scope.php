<?php

$value = 15; //variavel global, fora de funçoes

echo "$value Global <br>";

function test(){
    
    $value = 20;
    echo "$value Local <br>"; //variavel local dentro da função test()

};

test();

//Acessando e alterando variavel global

function testGlobal(){

    global $value; //acessando variavel global dentro do escopo local

    echo "$value Antes de alterar<br>";

    $value = 999; //alterando valor da varivael global

    echo "$value Depois de alterar<br>";

}

testGlobal();

echo "$value Escopo global<br>";

//Variavel static

function testStandard(){

$num = 0;
$num++;

echo "$num<br>";

};

testStandard();
testStandard();
testStandard();
testStandard();

echo "Apos usar static.. <br>";
function testStatic(){

    static $num = 0;
    $num++;
    
    echo "$num<br>";
};

testStatic();
testStatic();
testStatic();
testStatic();

//Escopo de parametros

function sum($numA, $numB){

    echo "Soma dos Numeros $numA + $numB = ";
    echo $numA + $numB;
    echo "<br>";

};

sum(2, 2);
sum(1, 2);
sum(3, 2);
sum(0, 2);


    
   
?>