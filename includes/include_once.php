<div class="titulo">Include Once</div>

<?php
include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "Variável: {$variavel} <br>";
$variavel = 'Variável Alterada';
echo "Variável: {$variavel} <br>";

include_once('include_once_arquivo.php');
echo "Variável: {$variavel} <br>";