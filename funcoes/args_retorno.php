<div class="titulo">Argumentos e Retornos</div>

<?php

    /**
     * Função que retorna uma mensagem simples
     */
    function obterMensagem() {
        return 'Seja bem vindo(a)!';
    }

    $mensagem = obterMensagem();
    echo $mensagem;

    /**
     * função que recebe um nome para retornar uma mensagem personalizada
     * @param string $nome
     * @return string
     */
    function obterMensagemComNome($nome) {
        return "Seja bem vindo {$nome}!";
    }

    echo '<br>';

    echo obterMensagemComNome('Tony');

    /**
     * função classica para entender parâmetros e retornos
     * @param int $a
     * @param int $b
     * @return int
     */
    function soma($a, $b) {
        return $a + $b;
    }

    echo "<br>" , soma(4, 5);
    echo "<br>" , soma(45, 78);

    echo "<hr>";

    /**
     * Mais um exemplo de função mostrando que o argumento passado é uma cópia da variavel.
     * Dentro do escopo da função, ele não troca o valor da variável de fora.
     */
    function trocarValor($a, $novoValor) {
        $a = $novoValor;
    }

    $variavel = 1;
    trocarValor($variavel, 3);
    echo '<br>', $variavel;

    /**
     * Usando & na frente do parâmetro, nos referimos ao endereço de memória.
     * Por tanto, alterações aqui afetarão a variável original, que está fora do escopo da função.
     */
    function trocarValorDeVerdade(&$a, $novoValor) {
        $a = $novoValor;
    }

    trocarValorDeVerdade($variavel, 5000);
    echo "<br>", $variavel;