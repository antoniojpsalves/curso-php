<div class="titulo">Desafio do módulo</div>

<?php

require_once('usuario.php');

$usuario = new Usuario('Antonio', 24, 'Syn');
$usuario->apresentar();
$usuario->apresentar2();