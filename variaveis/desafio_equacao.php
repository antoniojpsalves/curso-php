<div class="titulo">Desafio Equação</div>

<?php

    //cálculos iniciais:

    $numeradorA = pow((6 * (3 + 2)), 2);
    //echo $numeradorA;

    $denominadorA = 3 * 2;

    $fracA = $numeradorA / $denominadorA;

    $numeradorB = (1 - 5) * (2 - 7);
    //echo $numeradorB;

    $denominadorB = 2;

    $fracB = pow(($numeradorB / $denominadorB), 2);

    //echo $fracA , '<br>';
    //echo $fracB , '<br>';

    //Cálculos finais:

    $numeradorPrincipal = pow(($fracA - $fracB), 3);
    $denominadorPrincipal = pow(10, 3);

    $fracPrincipal = $numeradorPrincipal / $denominadorPrincipal;

    echo "O resultado final é: $fracPrincipal.";

?>