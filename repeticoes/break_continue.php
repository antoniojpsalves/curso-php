<div class="titulo">Break e Continue</div>

<?php

$cont = 16;


/**
 * Criando um laço de repetição infinito e printando a cada repetição a variável $cont.
 * Na sequência definindo um if que verifica essa variável e define o momento de sair do looping.
 */
for(;;) {
    echo "$cont <br>";
    $cont++;

    if($cont > 20) {
        break;
    }
}

echo "<hr>";


/**
 * Criando um laço de repetição infinito reutilizando a variável $cont do laço anterior.
 * A cada repetição verificamos se o número de $cont é ímpar. Se for damos um CONTINUE pulando essa repetição.
 * Ao dar continue, não executamos mais nada para essa repetição e passamos para a próxima.
 * Sendo assim, só printamos os números pares.
 */
for(;;) {
    $cont++;

    if($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
}

echo '<hr>';


//Testando esses conceitos usando foreach.
foreach(array(1,2,3,4,5,6) as $valor) {

    if($valor === 6)
        break;
    if($valor % 2 === 0)
        continue;
    echo "$valor<br>";
}