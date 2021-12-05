<div class="titulo">Classe</div>

<?php

class Cliente {
    
    //atributo
    public $nome = "Anônimo";
    public $idade = 18;

    function apresentarCliente() {
        echo "Nome: $this->nome <br> Idade: $this->idade";
    }

}

$c1 = new Cliente();
$c1->apresentarCliente();