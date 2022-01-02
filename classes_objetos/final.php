<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() {
        echo "Não vou mudar!<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo "Executando método 1 <br>";
    }
}

/* $classe = new Classe(); /// ?

$classe->metodo1();
$classe->metodo2(); */

final class Unica {
    public $att ="Valor único";
}

$unica = new Unica();
echo $unica->att;