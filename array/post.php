<div class="titulo">Array $_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id="nome"> <!-- O atributo name é o que serve de chave para o array POST !-->
    <input type="text" name="sobre-nome" id="sobre-nome">
    <button type="submit">Enviar</button>
</form>

<?php

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobre_nome =  isset($_POST['sobre-nome']) ? $_POST['sobre-nome'] : '';

echo "Olá, $nome $sobre_nome.";