<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando médotod 1";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Executando método 1 extendido!<br>";
        parent::metodo1();
    }

    protected function metodo2($p) {
        echo "Executando método 2 com parâmetro: $p <br>";
    }
    
    public function metodo3() {
        echo "Executando método 3.<br>";
    }
}


$inst = new Concreta();
$inst->metodo1(); 