<div class="titulo">Sessão</div>

<?php
session_start(); //Sempre a primeira coisa a se fazer ao se trabalhar com sessão.

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<br>";

if(isset($_SESSION['nome'])) {
    $_SESSION['nome'] = "Antonio";
}
if (isset($_SESSION['email'])) {
    $_SESSION['email'] = "dev@teste.com";
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<br>";

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar sessão</a>
</p>
