<div class="titulo">Include vs Required</div>

<?php

    echo "Usando include em um arquivo inexistente <br>";
    include('arquivo_inexistente.php');//Warning o arquivo não é extritamente necessário.
    echo "Usando require em um arquivo inexistente <br>";
    require('arquivo_inexistente.php'); //Fatal erro, o arquivo é extritamente necessário.

    echo "Não achou mesmo... ";