<div class="titulo">Laço For</div>

<?php
echo "Esse é um contador quebrado: <br>";

for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

//pegando o contador que foi inicializado no laço anterior
for(; $cont <=10; $cont++) {
    echo "$cont <br>";
}

//colocando o valor da variável de controle dentro do laço, por motivo nenhum
for(; $cont <=15;) {
    echo "$cont <br>";
    $cont++;
}

$array = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

echo"<pre>";
print_r($array);
echo"</pre>";

echo "Percorrendo o array como se aprende no java. <br>";

for($i = 0; $i < count($array); $i++) {
    echo "$array[$i] <br>";
}

echo "Percorrendo o array bi-dimensional MATRIZ. <br>";

$matriz =  [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

//Percorrendo matrizes
for($i = 0; $i < count($matriz); $i++) {
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]} <br>";
    }
}
