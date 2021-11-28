<div class="titulo">Foreach</div>


<?php

$dias = [
    'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sábado'
];


//Percorrendo array mostrando apenas o valor de cada item.
foreach($dias as $dia) {
    echo "$dia <br>";
}

//Percorrendo array mostrando o índice e o valor de cada item.
foreach($dias as $indice => $valor) {
    echo "$indice => $valor<br>";
}


//Definindo a mesma matriz de antes para poder usar com foreach
$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

/**
 * Maneira mais simples de percorrer arrays!!!
 * cada foreach percorre um array. No primeiro passamos a matriz como primeiro parametro.
 * Dentro dele criamos um novo foreach usando a linha como parametro.
 * Dessa maneira conseguimos percorrer os valores mais facilmente que utilizando 2 'FOR's.
 */
foreach($matriz as $linha) {
    // print_r($linha);
    foreach($linha as $valor) {
        echo "$valor<br>";
    }
}

$numeros = [1, 2, 3, 4, 5];

/**
 * Podemos usar o & para pegar a referencia do valor, e quando essa referência é alterada, o array guarda a informação alterada.
 * Sem o &, o array não sofre altereção.
 */
foreach($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
echo "<pre>";
print_r($numeros);
echo "</pre>";