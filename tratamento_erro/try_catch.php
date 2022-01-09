<div class="titulo">Try / Catch</div>


<?php

// echo 7 / 0;
// echo intdiv(7 , 0);

try {
    intdiv(7, 0);
} catch(Error $e) {
    echo "Teve um erro n a execução desse trecho: $e";
} catch (Exception $ex) {
    echo "Ocorrêu um erro na execução desse trecho: $e";
}