<div class="titulo">Criar Banco</div>

<?php

require_once 'conexao.php';

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso ao criar o banco de dados.";
} else {
    echo "Erro ao criar o banco de dados: " . $conexao->error;
}

$conexao->close();