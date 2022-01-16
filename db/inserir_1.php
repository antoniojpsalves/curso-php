<div class="titulo">Inserir Registro #01</div>

<?php

require_once 'conexao.php';

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) 
    VALUES ('Antonio', '1997-06-04', 'syn@dev.com', 'https://www.syn.com', 0, 12000)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso ao inserir os dados.";
} else {
    echo "Erro ao inserir os dados: " . $conexao->error;
}

$conexao->close();