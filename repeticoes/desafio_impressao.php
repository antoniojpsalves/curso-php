<div class="titulo">Desafio impressão</div>

<?php

echo "<h4> Imprima apenas os valores do array que tenham índice par. Fazer com for e foreach. <br> Valores esperados: AAA , CCC, EEE </h4>";


$array = [
    'AAA',
    'BBB',
    'CCC',
    'DDD',
    'EEE',
    'FFF'
];

echo "<hr>";

echo "<p> Usando foreach </p> <br>";

//Minha solução usando foreach!!!!
foreach($array as $indice => $valor) {
    if($indice % 2 !== 0)
    continue;
    echo "$valor<br>";
}

echo "<p> Usando for </p> <br>";

//Minha solução usando for!!!
for($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1)
        continue;
    echo "$array[$i] <br>";
}