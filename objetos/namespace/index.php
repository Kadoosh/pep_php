<?php 
    require 'class/class.php';
    require 'models/models.php';

    //namespace podem ser usados de 3 formas:
    
    //Forma 1
    
    $test = new \class\testNamespace; 
    $test->testNamespace();

    //Forma 2

    use models\TestNamespace;
    $test = new testNamespace; 
    $test->testNamespace();

    //Forma 3

    use class\TestNamespace as testToName; //aqui esta apelidando o metodo

    $test = new testToName;
    $test->testNamespace();


    

?>