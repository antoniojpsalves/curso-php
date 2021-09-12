<div class="titulo">Variáveis Variáveis</div>

<?php
    
    //Variáveis variáveis tem o nome definido pelo conteúdo da variável inicial. SIMPLES ASSIM.

    $varA = 'ValorA';
    $$varA = 'Outro Valor';

    echo "$varA , {$$varA}, $ValorA";

    echo '<br>';

    $epa = "opa";
    $opa = "vish";
    $vish = "Eita !!!!";

    echo "$epa, {$$epa}, {$$$epa}";
