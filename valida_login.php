<?php

//Verificando primeiramente se existe um cookie criado da sessao anterior.
if($_COOKIE['usuario_logado']) {
    $_SESSION['usuario_logado'] = $_COOKIE['usuario_logado'];
}

//Verificando se o usuário não está logado, e redirecionando para o login.
if(!$_SESSION['usuario_logado']) {
    header('Location: login.php');
}