<div class="titulo">Traits</div>


<?php

trait Validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait ValidacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (PRIVADO)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str) !== '';
    }
}

class Usuario {
    use Validacao, ValidacaoMelhor;

    public function imprimirValorC() {
        echo "<br>" . $this->c;
    }
}

$usuario = new Usuario('', '', '');
var_dump($usuario->validarString(' '));
echo "<br>";
var_dump($usuario->validarStringMelhor(' '));