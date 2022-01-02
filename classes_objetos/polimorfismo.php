<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {
    
}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }
    
    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.45;

$p = new Pessoa(85.00);
$p->comer($c1);

echo $p->peso;