<div class="titulo">Interpolação</div>

<?php

    $numero = 10;
    echo $numero;
    echo '<br> $numero'; // Aspas simples não é capaz de interpretar variáveis.
    echo "<br> $numero"; // Aspas duplas sim, ocorre interpolação.

    $texto = "A sua nota é: $numero";

    echo "<br> $texto";

    $objeto = 'caneta';
    //echo "<br> Eu tenho 5 $objetos"; // Não se pode adicionar S no fim da frase dessa maneira, gera erro.
    echo "<br> Eu tenho 5 {$objeto}s"; // A solução para isso é usar chaves.
    
    // Testando espaços

    echo "<br> Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s";