<?php

function success($dedication, $persistence, $passion) {
    $dedication ++;
    $persistence ++;
    $passion = true;

    if($passion) {
        $magic = $dedication + $persistence;
        return $magic;
    } else {
        $magic = 0;
        return $magic;
    }
}

// Love it. Make mistakes. Learn. Keep Grinding!