<div class="titulo">Comparação entre Arrays</div>


<?php

$array1 = ['nome' => "maria", 'idade' => 20];
$array2 = ['nome' => "maria", 'idade' => 20];

var_dump($array1 == $array2); // Retorno TRUE;
var_dump($array1 === $array2); // Retorno TRUE;
var_dump($array1 != $array2); // Retorno FALSE;


$array3 = ['idade' => 20, "nome" => 'maria'];

echo "<br>  Copmarações do array 3:";

//Mesmo a ordem estando diferente, se os elementos forem os mesmos essa comparação retorna TRUE
var_dump($array1 == $array3);
//Para a comparação de idêntico esse caso retorna FALSE.
var_dump($array1 === $array3);

echo "Comparações do array 4: <br>";

$array4 = ['idade' => '20', 'nome' => 'maria'];
//Mesmo a ordem estando diferente, e os tipos sendo diferentes se os valores forem os mesmos essa comparação retorna TRUE
var_dump($array1 == $array4);
//Para a comparação de idêntico esse caso retorna FALSE.
var_dump($array1 === $array4);