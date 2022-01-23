<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";


$conexao = novaConexao();

$sql = "SELECT * FROM cadastro";

//PDO::FETCH_NUM
//PDO::FETCH_ASSOC

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";


$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);


if($stmt->execute()) {
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "UHUUU <br>";
} else {
    echo "Erro: " . $stmt->errorCode(); 
}