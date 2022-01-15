<div class="titulo">Escrever Arquivo</div>

<?php

$arquivo = fopen('arquivo.txt', 'w');
fwrite($arquivo, "Valor inical \n");
$str = "Segunda linha \n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('arquivo.txt', 'w');
fwrite($arquivo, "Novo conteúdo \n");

$arquivo = fopen('arquivo.txt', 'a');
fwrite($arquivo, "Com novos valores \n");
fwrite($arquivo, "Novo conteúdo.");
fclose($arquivo);


// $arquivo = fopen('arquivo.txt', 'x'); //Abrir e criar um arquivo novo.