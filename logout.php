<?php
session_start();
session_destroy();
unset($_COOKIE['usuario_logado']); // Destruindo a variável que contém o cookie
setcookie('usuario_logado', ''); // Definindo o cookie criado anteriormente como vazio no navegador
header('Location: login.php');