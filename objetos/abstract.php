<?php 

    abstract class Test {
        public static function testClass(){
            echo "Esse e um teste de classe abstrata <br>";
        }

        abstract public function testAbs(); //quando declarado, e obrigatorio declarar a mesma na classe filho
    }

    //$test = new Test; classes abstratas não podem ser estanciadas

    Test::testClass(); //metodos de classes abstratas podem ser chamados diretamente

    class TestAbstract extends Test { //Esta herdando da classe Test
        public function testAbs(){
            echo "Teste metodo abstrato <br>";
        }

        public function test2(){
            echo "Outro teste <br>"; //Porem quando e declarado um metodo dentro da classe filho, a mesma não depende da classe pai
        }
    }

    $test = new TestAbstract;
    $test->testAbs();
    $test->testClass();
    $test->test2();
?>