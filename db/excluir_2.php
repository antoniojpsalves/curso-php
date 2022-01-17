<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="titulo">Excliur Registro #02</div>

<?php

require_once 'conexao.php';

$sql_consulta = "SELECT * FROM cadastro";

$conexao = novaConexao();

if(isset($_GET['excluir']) && $_GET['excluir'] != '') {

    $excluirSql = "DELETE FROM cadastro WHERE id = ?";

    $stmt = $conexao->prepare($excluirSql);

    $stmt->bind_param('i', $_GET['excluir']);
    $stmt->execute();
}

$resultado = $conexao->query($sql_consulta);

$registros = [];

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()){
        $registros[] =$row;
    }
} elseif($conexao->erro){
    echo "Erro: " .$conexao->erro;
}

/* echo "<pre>";
print_r($registros);
echo "</pre>"; */

$conexao->close();



?>

<table class="table table-hover table-striped">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th>Site</th>
        <th>Filhos</th>
        <th>Salário</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])); ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= $registro['site'] ?></td>
                <td><?= $registro['filhos'] ?></td>
                <td><?= $registro['salario'] ?></td>
                <td>
                    <a href="exercicio.php?dir=db&file=excluir_2&excluir=<?=$registro['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>