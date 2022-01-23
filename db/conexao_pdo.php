<?php

function novaConexao($banco = 'curso_php') {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';


    try {
        //String recebe o SGBD, host, dbname. Após user, e password.
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        return $conexao;
    } catch (PDOException $e) {
        die('Erro de conexão:' . $e->getMessage());
    }
}