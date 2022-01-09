<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php 

echo __NAMESPACE__ . "<br>";

const CONSTANT1 = 123;


/**
 * Para definir uma const usando define, precisa colocar o nome da namespace e contra barra
 */
define('contexto\CONSTANT2', 321);

//exemplo 2

define(__NAMESPACE__ . '\constant3', 333);
define('outroContexto\constant4', 313);


echo CONSTANT1 . '<br>';
echo CONSTANT2 . '<br>';
// echo contexto\constant3 . '<br>';
echo \outroContexto\constant4 . '<br>';

