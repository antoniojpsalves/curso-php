<div class="titulo">Constantes</div>

<?php
echo "Trabalhando com constantes. <br>";

define('TAXA_DE_JUROS', 5.9); // Definir constante primeiro parametro string label, segundo valor.
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo "<br>" . NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel);
const NOVISSIMA_TAXA = 2.8 +  1.2;

echo "<br>" . NOVISSIMA_TAXA;

echo "<br>" . PHP_VERSION;

echo "<br> Linha atual: " . __LINE__; //Retorna a linha do código.

echo "<br> Arquivo atual: " . __FILE__; //Retorna o arquivo atual.

echo "<br> Diretório atual: " . __DIR__; //Retorna o diretório atual.