<div class="titulo">Desafio do Palíndromo</div>

<?php

    function palindromo($palavra) {
        $ultimoIndice = strlen($palavra) - 1;
        for($i = 0; $i < $ultimoIndice; $i++) {
            if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
                return 'Não';
            }
        }
        return 'Sim';
    }

    function palindromoSimples($palavra) {
        return $palavra === strrev($palavra) ? 'Sim' : 'Não';
    }

    echo palindromo('ARARA') . '<br>';
    //echo palindromo('joao');
    echo palindromoSimples('ABCCBA') . '<br>';
