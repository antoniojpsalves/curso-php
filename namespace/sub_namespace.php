<?php namespace App;?>

<div class="titulo">Sub Namespace</div>

<?php

    echo __NAMESPACE__ . '<br>';
    
    const constante = 123;
    
    
    namespace App\Principal;
    
    echo __NAMESPACE__ . '<br>';
    
    const constante = 456;

    namespace App\Principal\Especifico;
    echo __NAMESPACE__ . '<br>';
    
    const constante = 789;

    echo constante . '<br>';
    echo \App\constante . '<br>';
    echo \App\Principal\constante . '<br>';
    echo \App\Principal\Especifico\constante . '<br>';
