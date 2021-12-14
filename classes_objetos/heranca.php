<div class="titulo">Herança</div>

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

$usuario = new Usuario('Antonio', 24, 'Syn');
$usuario->apresentar();
$usuario->apresentar2();