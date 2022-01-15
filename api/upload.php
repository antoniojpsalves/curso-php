<div class="titulo">Upload de Arquivos</div>

<?php
    print_r($_FILES);

    if(isset($_FILES) && isset($_FILES['arquivo'])) {
        $pastaUpload = 'C:/wamp64/www/curso-php/arq_temp/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)) {
            echo "<br> Arquivo válido. Enviado com sucesso.";
        } else {
            echo "<br> Erro ao enviar o arquivo.";
        }
    }
?>

<!-- Definindo o encode do formulário para suportar upload de arquivos !-->
<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>