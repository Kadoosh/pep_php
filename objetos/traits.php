<?php 

    trait TestTrait {
        public function test(){
            echo "Testando trait <br>";
        }
    }
    trait AddTest {
        public function addTest(){
            echo "Mais um teste de Trait <br>";
        }
    }
    class Testing {
        use TestTrait;
        use AddTest;
    }

    $a = new Testing;

    $a->test();
    $a->addTest();

?>