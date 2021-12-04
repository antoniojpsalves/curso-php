<div class="titulo">Closure e Callable</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(2, 3) . '<br>';

echo is_callable($soma) ? "Sim" : "Não";