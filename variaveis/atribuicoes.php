<div class="titulo">Atribuições</div>

<?php
    $title = 'atribuições';
    $numero = 10;
    echo $numero , '<br>';
    $numero = $numero - 1;
    echo $numero , '<br>';
    $numero = $numero + 1.5;
    echo $numero , '<br>';
    --$numero;
    $numero--;
    echo $numero , '<br>';
    $numero++;
    ++$numero;
    echo $numero , '<br>';
    $numero = 20;
    echo $numero , '<br>';
    $numero -= 5;
    echo $numero , '<br>';
    $numero += 5;
    echo $numero , '<br>';
    $numero *= 10;
    echo $numero , '<br>';
    $numero /= 2;
    echo $numero , '<br>';
    $numero %= 6;
    echo $numero , '<br>';
    $numero **= 4;
    echo $numero , '<br>';
    $numero .= 4; // não é uma operação é uma concatenação!!!
    echo $numero , '<br>';

    // Atribuições com Strings

    $texto = 'Esse é um texto';
    echo "$texto <br>";
    $texto = $texto . ' qualquer';
    echo "$texto <br>";
    $texto .= ' de verdade!';
    echo "$texto <br>";

    // Setando valor padrão caso não haja valor em uma variável! muito útil!

    //$variavelInexistente = "Valor existente";
    //echo "$variavelInexistente <br>";
    $valor = $variavelInexistente ?? "valor default";
    echo $valor , "<br>";


