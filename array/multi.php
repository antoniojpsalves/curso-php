<div class="titulo">Multidimensionais</div>

<?php


$dados = [
    [
        "nome" => "Antonio",
        "idade" => 24,
        "cidade" => "São Paulo"
    ],
    [
        "nome" => "Marcola",
        "idade" => 18,
        "cidade" => "São Paulo"
    ]
];

// Adicionando mais um item no final do array de forma simples.
$dados[] = [
    "nome" => "Jefferson",
    "idade" => 17,
    "cidade" => "São Paulo"
];


// Adicionando mais um item dentro de um array interno

$dados[2]['vizinho'] = "Chaves";



//Removendo um item do array
unset($dados[1]);

/**
 * Exibe os dados de um array
 * @param array $x
 * @return void
 */
function exibirDados($x){

    echo "<pre>";
    print_r($x);
    echo "</pre>";
}

exibirDados($dados);