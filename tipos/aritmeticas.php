<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1, "<br>";
    var_dump(1+1);
    echo "<br>";
    echo 1 + 2.5, "<br>";
    echo 10 - 2, "<br>";
    echo 2 * 5, "<br>";
    echo 7 / 4, "<br>";
    echo intdiv(7, 4);  // Função para considerar uma divisão apenas de números inteiros. Ignora decimal.
    echo round(7, 4);   // Arredonda o valor de acordo com o resultado decimal.
    echo 7 % 4, "<br>"; // Resto da divisão.
    echo 7 % 2, "<br>";
    echo 8 % 2, "<br>";
    //echo 7 / 0, "<br>"; // Nesse caso o php retorna um valor infinito.
    //echo intdiv(7 / 0); // Para o caso de função vai retornar um #erro!
    echo 4 ** 2, "<br>";


    // Precedência de operadores.
    // () => ** => / * % => + -

    echo "<p> Precedência </p>";
    echo 2 + 3 * 4, "<br>"; // 14.
    echo (2 + 3) * 4, "<br>"; // 20.
    echo 2 + 3 * 4 ** 2, "<br>"; //50.
    echo ((2 + 3) * 4) ** 2, "<br>"; //400.

?>