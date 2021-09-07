<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo "<br>";
    echo FALSE;

    echo "<br>";
    
    echo "<br>" . var_dump(true);
    echo "<br>" . var_dump(False);

    echo "<br>" . is_bool(false);
    echo "<br>" . is_bool('false');

    // Fazer as regras de conversões

    echo "<p>Exemplo de regras de conversão: </p>";
    
    echo "<br>" . var_dump((bool) 0); // Apenas zero resulta em false.
    echo "<br>" . var_dump((bool) 20); // True.
    echo "<br>" . var_dump((bool) -1); // True.
    echo "<br>" . var_dump((bool) 0.0); // False.
    echo "<br>" . var_dump((bool) 0.00000001); // True.
    echo "<br>" . var_dump((bool) ""); // String vazia resulta em False.
    echo "<br>" . var_dump((bool) "0"); // String com conteúdo de um ZERO apenas resulta em false.
    echo "<br>" . var_dump((bool) " "); // Todo outro conteúdo resulta em true.
    echo "<br>" . var_dump((bool) "00");
    echo "<br>" . var_dump((bool) "false");
    
    echo "<p>Uma outra maneira mais simples fazer de conversão é: </p>";
    
    echo "<br>" . var_dump(!!"false"); // Dupla negação retorna um valor boolean.

?>