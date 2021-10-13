<div class="titulo">Desafio PI</div>

<?php


$pi_real = pi();

$pi_default = 3.14;

$pi_selected = 3.1415;

if($pi_selected >= $pi_default && $pi_selected <= $pi_real) {
    echo "Precisão aceitável!";
} else {
    echo "Impreciso.";
}