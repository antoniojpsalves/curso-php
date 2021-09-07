<div class="titulo">Desafio String</div>

<?php
    //Enunciado:
    //Avaliando os métodos da documentação do php, selecione o método que retorna 1, buscando por 'abc' na string '!AbcaBcabc';

    //Minha resposta

    //echo mb_strpos('abc', '!AbcaBcabc', 'utf-8');
    echo strpos('!AbcaBcabc','abc'); //Usou case sensitive;
    echo "<br>";
    echo stripos('!AbcaBcabc','abc');//case insensitive;
?>