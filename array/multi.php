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


//exibirDados($dados);



/**
 * Antonio Alves 10/11
 * O php doc é esse comentário aqui. Serve pra em qualquer momento, e em qualquer lugar que essa função for chamada, exibir a informação dela. O que ela recebe, e o que retorna.
 * @param array $x
 * @return void
 */
function exibirDados($x){

    echo "<pre>"; //serve pra formatar um array na hr de exibir na tela.
    print_r($x);
    echo "</pre>";
}

echo "<pre>"; //serve pra formatar um array na hr de exibir na tela.
print_r($dados);
echo "</pre>"; //serve pra formatar um array na hr de exibir na tela.