<div class="titulo">Traits 02</div>

<?php

use Usuario as GlobalUsuario;

trait Validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait ValidacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str) !== '';
    }
}

class Usuario {
    use Validacao, ValidacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;
    }
}

$usuario = new Usuario('','','');

var_dump($usuario->validarString(''));