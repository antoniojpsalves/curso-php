<div class="titulo">Desafio For</div>

<?php

echo "to no desafio <br>";

/**
 * #
 * ##
 * ###
 * ####
 * #####
 */

$hash = '#';
for($i = 1; $i <= 5; $i++) {
    echo "$hash <br>";
    $hash .= '#';
}
//Tchama!!!!

echo "<hr>";

//Para pensar!
for($hash2 = '#'; $hash2 !== '######'; $hash2 .= '#') {
    echo "$hash2<br>";
}