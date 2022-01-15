<div class="titulo">Download de Arquivos</div>

<?php
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$pathArquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $pathArquivo)) {
    echo '<br> Arquivo válido e enviado com sucesso.';
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivo'] = $arquivos;
} else {
    echo "<br> Erro no upload de arquivos.";
}

?>

<!-- Definindo o encode do formulário para suportar upload de arquivos !-->
<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="../files/<?=$arquivo?>"> <?= $arquivo ?> </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>