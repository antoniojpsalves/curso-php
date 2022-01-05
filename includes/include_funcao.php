<div class="titulo">Include Função</div>

<?php

    echo "Carregando o arquivo: include_funcao.php<br>";
    
    function carregarArquivo() {
        include('include_arquivo.php');

        echo $variavel . "<br>";
        echo $soma(2,5) . "<br>";
    }

    echo "Novamente no arquivo: include_funcao.php <br>";

    carregarArquivo();