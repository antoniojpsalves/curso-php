<div class="titulo">PDO: Alterar</div>

<?php

require_once 'conexao_pdo.php';

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

$conexao = novaConexao();

$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Ray',
    '2004-02-19',
    'rayconsd@gmail.com',
    'http://adad.com',
    1,
    7500,
    4
]);


if($resultado) {
    echo "Alterado com sucesso";
} else {
    print_r($stmt->errorInfo());
}