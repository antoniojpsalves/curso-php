<div class="titulo">Visibilidade</div>

<?php

class A {
    
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";
    
    public function mostrarA() {
        echo "Classe A) publico {$this->publico} <br>";
        echo "Classe A) publico {$this->protegido} <br>";
        echo "Classe A) publico {$this->privado} <br>";

        echo '<br>';

        $this->naoMostrar();
    }

    private function naoMostrar() {
        echo "Não vou imprimir <br>";
    }
}

$a = new A();
$a->mostrarA();

echo 'A: Fim!';

echo '<br>';

class B extends A {
    public function mostrarB(){
        echo "Classe B) publico = {$this->publico} <br>";
    }
}

$b = new B();
$b->mostrarB();

echo 'B: Fim!';