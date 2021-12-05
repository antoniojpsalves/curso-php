<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $novaIdade) {
        echo "Invocando o construtor<br>";

        $this->nome = $novoNome;
        $this->idade = $novaIdade;
    }

    function __destruct() {
        echo "E morreu!";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Tony', 24);
$pessoa2 = new Pessoa('Raycon', 16);

$pessoa->apresentar();
$pessoa2->apresentar();

unset($pessoa);