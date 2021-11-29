<div class="titulo">Desafio Palindromo</div>

<h4>Verificar se uma palavra é considerada um palindromo:</h4>
<form action="#" method="post">
    <label for="palavra">Digite uma palavra</label>
    <input type="text" value="<?= $_POST['palavra'] ?? ''?>" name="palavra" id="palavra">
    <input type="submit" value="Checar">
</form>

<?php

    $palavra = isset($_POST['palavra']) && !empty($_POST['palavra']) ? $_POST['palavra'] : '';

    /**
     * Função que retornará uma string sim ou não em caso de ser palindromo.
     * @param string $palavra
     * @return string
     */
    function verificar($palavra) {
        $revertida = strrev($palavra);
        return $revertida === $palavra ? ' Sim!' : ' Não!';
    }

    if(isset($_POST['palavra']))
        echo "A palavra: ({$palavra}) é considerada um palíndromo: ", verificar($palavra); 