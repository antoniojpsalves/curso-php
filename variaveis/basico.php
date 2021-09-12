<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, "<br>";
    var_dump($numeroA);

    echo '<br>';
    $a = 3;
    $b = 16;
    $soma = $a + $b;
    
    echo $soma . '<br>';
    
    //verificar se uma variável existe.
    
    
    echo '<br>';
    echo isset($soma);
    echo '<br>';
    
    //desfazer atribuíção em variáveis.
    //unset($soma);
    var_dump($soma);
    echo '<br>';

    $variavel = 10;
    echo "$variavel <br>";
    $variavel = "Agora eu sou uma string";
    echo "$variavel <br>";


    //Nomenclatura de variáveis

    $var = "válida";
    $var2 = "válida";
    $VAR3 = "válida";
    $_var_4 = "válida";
    $vâr5 = "válida"; //não é recomendável colocar caracteres especiais, pode dar conflitos.
    // $6var = "inválida";
    // $%var7 = "inválida";
    // $var8% = "inválida";
    
    
    echo "<br>";
    var_dump($_SERVER["HTTP_HOST"]);

?>