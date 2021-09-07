<div class="titulo">Conversões de tipos</div>

<?php
    echo is_int(PHP_INT_MAX); // Retorna true ou false. 1 ou 0.

    // De int para float se você pegar o máximo número inteiro e somar mais um, ele passa a ser float.
    echo "<br>";
    var_dump(PHP_INT_MAX + 1);
    echo "<br>";
    
    // Conversões normais, se tentar somar um int e um float, o resultado é um float.
    var_dump(1 + 1.0);
    echo "<br>";

    //Conversões por cast. CAST é conversão forçada (explicita).
    echo "<br>";
    var_dump((float) 3);
    echo "<br>";
    
    // Float para int, existe a possibilidade de perder a informação decimal.
    echo "<br>";
    echo "<p>Float para int</p>";
    var_dump((int) 2.8);
    echo "<br>";
    var_dump(intval(2.8, 10)); // O segundo parâmetro é a base utilizada, base 10 nesse caso.
    echo "<br>";
    var_dump(intval(3.8)); // A base 10 é a padrão, portanto não precisa segundo parâmetro.
    echo "<br>";
    var_dump((int) round(2,8)); // Arredondando o valor para 3.

    // Operações com strings

    echo "<p> Strings </p>";

    var_dump(3 + "2"); // O resultado é inteiro 5. O php sabe que não é concatenação, pois não utiliza sinal de ponto.
    echo "<br>";
    var_dump("3" + 2); // Mesmo resultado.
    echo "<br>";
    var_dump("3" . 2); // Vai acontecer concatenação. O resultado será String 32.
    echo "<br>";
    is_string("3" . 2); // Resultado true.
    echo "<br>";
    //is_string("3" + 1); // Resultado false.
    echo "<br>";
    //var_dump(1 + "cinco"); // Vai retornar apenas a parte inteira no caso 1.
    echo "<br>";
    //var_dump(1 + "5 cinco"); // Nesse caso o php vai pegar a parte númerica dentro da string, e retornar 6, ignorando o resto.
?>