<div class="titulo">Desafio dos 7 Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando!<br>";
    }

    public function metodo2($string) {
        echo "Olá, $string. <br>";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {

    }

    function metodo1() {
        echo "método1";
    }

    public function metodo3() {
        echo "Dentro do método 3: <br>";
        $this->metodo2('Antonio');
    }
}

$exemplo = new Classe('');
$exemplo->metodo3();