<?php

require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;

        echo "Usuário criado <br>";
    }

    function __destruct() {
        echo "Destruíndo usuário";
    }

    public function apresentar() {
        echo "@{$this->login}, {$this->nome} {$this->idade} anos <br>";
    }

    /**
     * Realizando a mesma coisa que a função que foi sobrescrita acima, só que trazendo a parte aproveitável da função original.
     * Que pertence a classe que foi extendida.
     */
    public function apresentar2() {
        echo "@{$this->login} : ";
        parent::apresentar();
    }
}