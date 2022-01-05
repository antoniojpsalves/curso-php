<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $novaIdade) {
        $this->nome = $novoNome;
        $this->idade = $novaIdade;

        echo "Pessoa criada <br>";
    }

    function __destruct() {
        echo "Objeto destruído";
    }


    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }

}