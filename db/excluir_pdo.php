<div class="titulo">PDO: Excluir</div>

<?php

require_once 'conexao_pdo.php';

$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([15])) {
    echo "Sucesso :)";
} else {
    echo "Erro:" . $stmt->errorCode();
}