<div class="titulo">Array Mapa</div>

<?php

$dados = array(
    "idade" => 24,
    "cor" => 'Roxo',
    "peso" => 65.5,
);

print_r($dados);

echo "<br>";
echo "Sua cor preferida é $dados[cor]";
echo "<br>";

//adicionando um valor ao final do array

$dados["nome"] = "Antonio";
print_r($dados);