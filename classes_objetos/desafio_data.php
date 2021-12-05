<div class="titulo">Desafio Data</div>

<?php

class Data {
    
    public $dia = '1';
    public $mes = 'janeiro';
    public $ano = '1970';

    public function apresentar() {
        $string = "$this->dia/$this->mes/$this->ano";
        return $string;
    }
}

$unix_data = new Data();

$sla = $unix_data->apresentar();

echo "$sla <br>";