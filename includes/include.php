<div class="titulo">Include</div>

<?php

    echo "Executei essa linha do arquivo include<br>";

    include('include_arquivo.php');

    echo $soma(3,8) . '!<br>';

    echo "Interpolando o valor da variável: {$variavel}! <br>";