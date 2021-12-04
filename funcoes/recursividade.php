<div class="titulo">Recursividade</div>

<?php 

$number = 7;

for($i = 1; $i < 7; $i++) {
    $number *= $i;
}

echo "$number";



function somaAteNum($numero) {
    $soma = 0;

    for(; $numero >= 1; $numero --) {
        $soma += $numero;
    }
    return $soma;
}


echo '<br>' . somaAteNum(10) . '<br>';


function somaRecursivaAteNum($numero) {
    
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaAteNum($numero - 1);
}

echo '<br>' . somaRecursivaAteNum(10) . '<br>';