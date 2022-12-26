<?php

    include "test.php"; //se o arquivo nao existir, gera alguns warnings, mais não impede do rodar o codigo principal
    include "arquivos/test2.php"; //acessando pastas no mesmo diretorio
    include "../desafios/array_reverse.php"; //acessando pastas em diretorios anteriores


?>

<p> Apos o include </p>
<p> Imprimindo varivael test: <?php echo $test;?></p>


