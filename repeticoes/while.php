<div class="titulo">While e Do While</div>

<?php

const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE) {
    echo "While: $contador <br>";
    $contador++;
}

$contador = 0;

do {
    echo "Do-while: $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

$contador = 0;

while(true) {
    echo "while(true) $contador <br>";
    $contador++;

    if($contador > 3) break;
}