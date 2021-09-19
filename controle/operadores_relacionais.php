<div class="titulo">Operadores Relacionais</div>

<?php 

/* var_dump(1 == 1 ); //Verdadeiro
var_dump(1 > 1); //False
var_dump(1 < 1); //False
var_dump(1 >= 1); //Verdadeiro
var_dump(1<= 1); //Verdadeiro

//Duas formas de simbolizar diferença

var_dump(1 != 1); //Forma mais usual.
var_dump(1 <> 1); //Diferente do SQL.
 */


//Idêntico compara os tipos também.

var_dump(111 == '111'); //Verdadeiro.
var_dump(111 === '111'); //Falso pois os tipos são diferentes.

//Funciona também com a diferença!

var_dump(111 != '111'); //False
var_dump(111 !== '111'); //True pois os campos são estritamente diferentes.

echo "<p style='margin-bottom: 0px;'>Usando operadores relacionais com if/else</p> <hr style='margin-top: 0px;'>";

$idade = 15;

if($idade < 18) {
    echo "Menor de idade";
} else if($idade < 65) {
    echo "Adulto";
} else {
    echo "Terceira idade";
}

echo "<p style='margin-bottom: 0px;'>Usando operador SPACESHIP</p> <hr style='margin-top: 0px;'>";

echo "<p> O operador spaceship, retorna os valores { 1, 0 ou -1 }. <br> Se o primeiro número for maior que o segundo, 1. Se for igual, 0. E se for menor -1. </p>";

var_dump(500 <=> 50); // Retorna 1.
var_dump(500 <=> 500); // Retorna 0.
var_dump(5 <=> 500); // Retorna -1.

echo "<p style='margin-bottom: 0px;'>Valores podem ser convertidos para V ou F</p> <hr style='margin-top: 0px;'>";

var_dump(!!5); //True
var_dump(!!0); //False
var_dump(!!""); //False
var_dump(!!" "); //True