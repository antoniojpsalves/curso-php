<?php
session_start();

$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if(isset($_POST['email'])) {
    $usuarios = [
        [
            "nome" => 'Antonio',
            "email" => 'syn@dev.com',
            "senha" => '!$yn',
        ],
        [
            "nome" => 'Marcos',
            "email" => 'marcola@dev.com',
            "senha" => 'ovocommorango',
        ],
        [
            "nome" => 'Guilherme',
            "email" => 'code@dev.com',
            "senha" => 'WeCode',
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
           $_SESSION['error'] = null;
           $_SESSION['usuario_logado'] = $usuario['nome'];
           
           // segundos, minutos, horas, dias.
           $exp = time() + 60 * 60 * 24 * 30;

           //Usando cookie para salvar a informação de usuário logado
           setcookie('usuario_logado', $usuario['nome'], $exp);

           header('Location: index.php');
        }
    }

    if(!isset($_SESSION['usuario_logado'])) {
        $_SESSION['error'] = ['Usuário/Senha inválida!'];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se:</h3>
            <?php if(isset($_SESSION['error'])): ?>
                <div class="erros">
                    <?php foreach($_SESSION['error'] as $erro):?>
                        <p><?= $erro ?></p>
                    <?php endforeach?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Developed By $yn - <?= date('Y');?>
    </footer>
</body>
</html>