<?php

/**
 * Antonio Alves - 20/12/2021
 * Validando se existe caracteres especiais na string enviada
 * @param string
 * @return bool
 */
function validaEspecialChar($txt) {
    $underscore = false;

    $pos = strpos($txt, "_");
    echo $pos. '<br>';
    if (!is_bool($pos) && $pos >= 0) {
        // encontrado...
        $underscore = true;
    }

    $patern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
    $res = preg_match($patern, $txt);

    if($res || $underscore) {
        return true;
    } else {
        return false;
    }
}

$res = validaEspecialChar('xxxxx?');
//var_dump($res);
echo $res ? 'Encontrado' : 'Não encontrado';