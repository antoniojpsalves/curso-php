<div class="titulo">Argumentos Variáveis</div>

<?php

    function soma ($a, $b) {
        return $a + $b;
    }

    echo soma(4,5) . '<br>';

    function somaCompleta (...$numeros) {
        //print_r($numeros);
        $soma = 0;
        foreach($numeros as $num) {
            $soma += $num;
        }
        return $soma;
    }

    echo somaCompleta(1, 2, 3, 4, 5) . '<br>';
    
    
    $array = [6, 7, 8];
    echo somaCompleta(...$array) . '<br>';

    function membros($titular, ...$membros) {
        echo "Titular: $titular <br>";
        if($membros) {
            foreach($membros as $mem) {
                echo "Membro: $mem <br>";
            }
        }
    }

    membros('Antonio', 'larissa', 'jefferson');



