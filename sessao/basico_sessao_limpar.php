<?php
//Iniciar a sessão antes na página para recuperar os dados em sessão antes de excluílos.
session_start();
session_destroy();
header('Location: basico_sessao.php');