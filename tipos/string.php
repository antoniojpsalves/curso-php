<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também sou uma string");
    echo '<br>';
    
    //Concatenação de strings
    
    echo "Nós também " . 'somos.'; // Simbolo para concatenar!
    echo '<br>', "Também aceito", "vírgulas."; 
    echo '<br>';
    echo " 'Teste' ". '"Teste"';

    echo "<br>";
    //Escapes em áspas
    echo "\"Teste\"". ' \'Teste\''; //Com escapes usanso a mesma delimitação de strings

    echo "\n pular linha" . "\t tabulação" . "\\";
    
    print("Também existe a função print para exibir texto nas telas.");

    //Algumas funções de strings.

    echo "<br>" . strtoupper('maximizado'); //Converte todos os caracteres minúsculos para maiúsculo.
    echo "<br>" . strtolower('MINIMIZADO'); //Converte todos os caracteres maiúsculos para minúsculo.
    echo "<br>" . ucfirst('Só a primeira letra mai.'); //Converte a primeira letra de uma string para maiúscula.
    echo "<br>" . lcfirst('SÓ A PRIMEIRA LETRA MIN.'); //Converte a primeira letra de uma string para minúscula.
    echo "<br>" . ucwords("Todas as primeiras letras das paravras."); //Converte todas as primeiras letras das palavras maiúsculas.
    echo "<br>" . strlen("Quantas letras?"); //Conta o comprimento de uma string. Tem dificuldades com acentos. 
    echo "<br>" . mb_strlen("Eu também","utf-8"); //Conta o comprimento de strings considerando acentos, pode receber o encoding como parâmetro.
    echo "<br>" . substr("Só uma parte da string", 7, 6); //Retorna só uma parte da string começando no índice 7, e exibindo até o índice 6.

    echo "<br>" . str_replace("isso", "aquilo", "Trocar isso isso");
?>