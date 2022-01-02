<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo "Construtor invocado<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E morreu!!! <br>";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos. <br>";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo um atributo não declarado: {$atrib}<br>";
    }
    
    public function __set($atrib, $valor) {
        echo "Alterando um atributo não declarado: {$atrib}/{$valor}<br>";
    }
    
    public function __call($method, $params) {
        echo "Tentando executar um método {$method}<br>";
        echo "<br>Com parâmetros: {$params}<br>";
    }
}

$pessoa = new Pessoa('Antonio', 24);

$pessoa->apresentar();
