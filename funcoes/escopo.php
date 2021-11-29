<div class="titulo">Escopo de funções</div>


<?php 

function imprimirMensagens() {
    echo "Olá!! <br>";
    echo "Até a próxima! <br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocarValor() {
    $variavel = 2;

    echo "Durante a função: $variavel. <br>";
}

echo "Antes de invocar a função: $variavel. <br>";

trocarValor();

echo "Depois de invocar a função: $variavel. <br>";


function trocarValorDeVerdade() {
    global $variavel;
    $variavel = 3;

    echo "Durante a função que troca de verdade: $variavel <br>";
}

echo "Antes da função que troca de verdade: $variavel<br>";
trocarValorDeVerdade();
echo "Depois da função que troca de verdade: $variavel<br>";