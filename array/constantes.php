<div class="titulo">Arrays Constantes</div>

<?php

// echo "To aqui";

const frutas = array("Uva", "Morango", "Goiaba", "Abacaxi");

echo "Minha fruta preferida é " . frutas[0];
echo "<br>";

const carros = ['fiat' => 'uno', 'ford' => 'Ka'];
echo "O carrinho do marcola é um " . carros['fiat'];



// Outra maneira de criar arrays constantes é utilizando define.

define('cidades', array('São Paulo', 'Rio de Janeiro', 'Rio grande do sul'));
echo "<br>";

echo "<pre>";
print_r(cidades);
echo "</pre>";

