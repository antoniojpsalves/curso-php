<?php
session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
echo '<br>';

?>

<p>
    <strong>Nome: </strong> <?= isset($_SESSION['nome']) ? $_SESSION['nome'] : '' ?>
    <br>
    <strong>Email: </strong> <?= isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>
</p>

<?php
$_SESSION['email'] = "dev@teste.com";
?>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar a sessão</a>
</p>