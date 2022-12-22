<?php 

    //Estrutura IF

    if (true) { //requer uma condição verdadeira para executar oque esta entre as chaves
      
        echo "Ola eu sou um if";

    };

    if (1 < 2) { //true
      
        echo "Ola eu tambem sou um if";
        
    };

    if (1 === 1 && 2 > 3) { //false
      
        echo "Ola, não entrou no IF";
        
    };

    //Estrutura IF e ELSE

    if (false) { //se der false cai no else
      
        echo "Não caiu no if..";
        
    } else {

        echo "Mais caiu no else hehe..";

    }

    //Estrutura IF aninhado
 
    if (true) { //IF aninhado nada mais é que um if dentro do outro
        echo "Entrou no if 1";
        if (true) {
            echo "Entrou no if 2";
            if (true) {
                echo "Entrou no if 3";
                if (true) {
                    echo "Entrou no if 4";
                    if (true) {
                        echo "Entrou no if 5";
                    }
                }
            }
        }
    }

    //Estrutura else if

    if (true) { // else if valida if por if ate encontrar uma codição TRUE ou cair no else
    
    } else if(false){
        echo "Entrou no else if 1";
    } else if(false){
        echo "Entrou no else if 2";
    } else if(false){
        echo "Entrou no else if 3";
    } else if(false){
        echo "Entrou no else if 4";
    } else if(false){
        echo "Entrou no else if 5";
    } else {
        echo "Entrou no else ";
    }

    //Estrutura IF ternario

    $testIf = 5 > 2 ? "Maior que dois" : "Menor que dois"; //basicamente if e else de uma linha só, 

    $testIf = 10 === 10 ? true : false; // antes do "?" e a condição, apos o "?" é oque acontece se for verdadeiro e apos o ":" oque for falso 

    //Estrutura Switch

    $testSwitch = 10;

    switch ($testSwitch) {  //aqui fica o dado a ser verificado
        case 100: //aqui e o case, caso o valor de $testSwitch == a esse case aqui, da true, se nao ele passa para o proximo...
            echo "Se testSwitch for == 100 vai executar...";
            break; //aqui e o break, caso o validação der true o codigo e executado e cai no break que "para" a exucução do switch
        case 200:
            echo "Se testSwitch for == 100 vai executar...";
            break;
        case 300:
            echo "Se testSwitch for == 100 vai executar...";
            break;
        
        default: //aqui e o default, vai cair aqui caso todos os cases seja falso 
            echo "Se testSwitch for == 100 vai executar...";
            break;
    }
    
?>