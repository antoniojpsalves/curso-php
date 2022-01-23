<div class="titulo">PDO: Inserir</div>

<?php
require_once 'conexao_pdo.php';

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) VALUES (
    'Micael',
    '2001-07-14',
    'micaelsd@gmail.com',
    'https://mica.com.br',
    '1',
    2000
)";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro registrado com id: $id";
} else {
    echo $conexao->errorCode() .'<br>';
    print_r($conexao->errorInfo());
}