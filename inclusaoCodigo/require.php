<?php 

    require "test.php"; //no require se o arquivo não existir, gera um fatal error, interrompendo a execução do codigo
    require "arquivos/test2.php"; //acessando pastas no mesmo diretorio
    require "../desafios/array_reverse.php"; //acessando pastas em outros diretorios

?>