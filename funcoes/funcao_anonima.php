<div class="titulo">Função Anônima</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';


function executar($a, $b, $op, $funcao) {
    
    $resultado = $funcao($a, $b);

    return "$a $op $b = $resultado <br>";
}

echo executar(2, 3, '+', $soma) . '<br>';

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

echo executar(2, 3, '*', $multiplicacao) . '<br>';

$dividir = function ($a, $b) {
    return $a / $b;
};

echo executar(9, 3, '/', $dividir) . '<br>';
