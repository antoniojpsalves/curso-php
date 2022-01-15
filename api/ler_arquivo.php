<div class="titulo">Ler Arquivo</div>

<?php

$arquivo = fopen('arquivo.txt', 'r');
echo fread($arquivo, 10) . '<br>';
echo fread($arquivo, 10) . '<br>';
fclose($arquivo);


echo '<hr>';

$arquivo = fopen('arquivo.txt', 'r');
$tamanho = filesize('arquivo.txt');
echo "$tamanho <br>";
echo fread($arquivo, $tamanho); // Ler o arquivo inteiro.
fclose($arquivo);


echo '<hr>';

$arquivo = fopen('arquivo.txt', 'r');
echo fgets($arquivo) . '<br>'; // Lê apenas uma linha do documento.
echo fgets($arquivo) . '<br>';
var_dump(fgets($arquivo));
fclose($arquivo);

echo '<hr>';

echo '<h2>Usando na prática</h2>';

$arquivo = fopen('arquivo.txt', 'r');
// f end of file
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

//Lendo caracteres
$arquivo = fopen('arquivo.txt', 'r');
// f end of file
while(!feof($arquivo)) {
    echo fgetc($arquivo), '<br>'; // ao inves de linha lendo caracteres por vez.
}
fclose($arquivo);


$arquivo = fopen('arquivo.txt', 'r+');
echo fgets($arquivo) . '<br>'; // Lê apenas uma linha do documento.
echo fgets($arquivo) . '<br>';
fwrite($arquivo, "Adicionado durante a leitura. \n");
fclose($arquivo);

echo "Fim!";