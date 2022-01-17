<div class="titulo">Excluir Registro #01</div>

<?php

require_once 'conexao.php';

$sql = "DELETE FROM cadastro c WHERE c.id = 7";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Registro excluído com sucesso.";
} else {
    echo "Erro:" . $conexao->erro;
}

$conexao->close();