<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Canino {
    function latir(): string;
}

class Cachorro implements Animal, Canino {
    function respirar(): string {
        return "Inspire - solte <br>";
    }

    function latir(): string {
        return "Au Au <br>";
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir();

echo "fim";