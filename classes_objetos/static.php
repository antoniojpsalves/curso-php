<div class="titulo">Membro Estático</div>

<?php

class A {
    public $naoEstatico = "Variável de instância";
    public static $static = "Variável estática (classe)";

    public function mostrarA() {
        echo "Mostrando não estático: {$this->naoEstatico} <br>";
        echo "Mostrando estático: " . self::$static ."<br>";
    }
    public static function mostrarStaticA() {
        echo "Mostrando estático: " . self::$static ."<br>";
    }
}

$a = new A();
$a->mostrarA();
echo '<hr>';
A::mostrarStaticA();