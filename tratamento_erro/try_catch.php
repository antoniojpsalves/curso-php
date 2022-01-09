<div class="titulo">Try / Catch</div>


<?php

// echo 7 / 0;
// echo intdiv(7 , 0);

try {
    intdiv(7, 0);
} catch(Error $e) {
    echo "Teve um erro n a execução desse trecho<br>";
}

try {
    throw new Exception('Um erro muito estranho.');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo "Divisão por zero <br>";
} catch (Throwable $e) {
    echo "Erro encontrado: " . $e->getMessage() . '<br>';
} finally {
    echo "Esse trecho é sempre executádo!<br>";
}

echo "Execução continua... <br>";