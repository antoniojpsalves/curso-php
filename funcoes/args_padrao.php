<div class="titulo">Argumento Padrão</div>

<?php


    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
        echo "Bem vindo , $nome $sobrenome! <br>";
    }

    saudacao();
    saudacao('Antonio', 'Alves');


    function anotarPedido($comida, $bebida = 'Água') {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    anotarPedido('Hamburger');
    anotarPedido('Pizza', 'Refrigerante');